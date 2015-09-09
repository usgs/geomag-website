      program lavacompare

c     bins data from external file by intensity and direction 
c     for comparison with the uni-modal gaussian distribution

      parameter(nbin1=60,nbin2=90)
      parameter(nmax=20000,nmax2=20000)
      dimension rf(nmax2),ri(nmax2),rd(nmax2),ra(nmax2)
      dimension rfc(nmax2),ric(nmax2),rdc(nmax2),rac(nmax2)
      dimension nfb(nbin1),nib(nbin2),ndb(nbin2),nab(nbin2)
      dimension rnf(nbin1),rni(nbin2),rnd(nbin2),rna(nbin2)
      dimension ev1(nbin1),ev2(nbin2),ev3(nbin2),ev4(nbin2)
      dimension bv1(nbin1),bv2(nbin2),bv3(nbin2),bv4(nbin2)
      character*8 rlabel8
      character*37 dumb
      character*20 rmodel
      character*80 string

      data pi/3.14159265358979323846264338328/
      fac = pi/180.

      write(*,*)' '
      write(*,*)'This program compares paleomagnetic vector data with a'
      write(*,*)'3-D Gaussian distribution, such as that which might'
      write(*,*)'be estimated from lavamax.f, and as outlined in'
      write(*,*)'Love, J. J. & Constable, C. G., 2003.'
      write(*,*)'Gaussian statistics for palaeomagnetic vectors,'
      write(*,*)'Geophys. J. Int., 152, 515-565.'
      write(*,*)' '
      write(*,*)'The bulk of this program was written by J. J. Love.'
      write(*,*)'Several numerical Recipes routines are used.'
      write(*,*)' '
      write(*,*)'The data format is like that generated by a companion'
      write(*,*)'program called lavadata.f.'
      write(*,*)' '
      write(*,*)'Some of the subroutines used here are based on the'
      write(*,*)'partial summation of infinite series. If more'
      write(*,*)'precision is needed, you can change nmax in rfdisti'
      write(*,*)'and rfidstd from 12 or so to a larger number ... '
      write(*,*)'say 20 or so, but this, then, will probably require'
      write(*,*)'compilation in double precision.'
      write(*,*)' '
      write(*,*)'Enter the data file name now.'
      write(*,*)' '
      read(*,'(a20)')rmodel
      write(string,'(a20)')rmodel
      open(1,file=string,status='unknown')
 8989 format(a20)

      write(*,*)' '
      write(*,*)'Data will be normalized to common latitude.'
      write(*,*)' '
      write(*,*)'Enter that latitude now.'
      write(*,*)' '
      read(*,*)rlatfix
      rincfix = atan(2*tan(rlatfix*fac))
      ffactorfix = sqrt(1+3.*sin(rlatfix*fac)**2)
      thetafix = fac*(90. - rlatfix)

      write(*,*)' '
      write(*,*)'Enter a mean x, y, z, and dispersion (sigma)'
      write(*,*)' '
      read(*,*)rmxsave,rmysave,rmzsave,rmssave
      
      rmhsave  = sqrt(rmxsave**2+rmysave**2)
      rmfsave  = sqrt(rmxsave**2+rmysave**2+rmzsave**2)
      rmfssave = rmfsave/rmssave
      rmisave  = asin(rmzsave/rmfsave)
      rmdsave  = atan2(rmysave,rmxsave)

      open(16,file='out.f.bin',status='unknown')
      open(17,file='out.i.bin',status='unknown')
      open(18,file='out.d.bin',status='unknown')
      open(19,file='out.a.bin',status='unknown')

      open(26,file='out.f.dis',status='unknown')
      open(27,file='out.i.dis',status='unknown')
      open(28,file='out.d.dis',status='unknown')
      open(29,file='out.a.dis',status='unknown')

      open(36,file='out.f.cum',status='unknown')
      open(37,file='out.i.cum',status='unknown')
      open(38,file='out.d.cum',status='unknown')
      open(39,file='out.a.cum',status='unknown')

      rlimf = 120
      if (iopt .eq. 3) rlimf = 2
      diff3 = rlimf/float(nbin1)
      
      do i = 1,nbin1
        bv1(i) = float(i-1)*diff3
        ev1(i) = float(i)*diff3
      end do
      
      rlima = 360
      diff3 = rlima/float(nbin2)
      
      do i = 1,nbin2
        bv2(i) = 270 - float(i-1)*diff3
        ev2(i) = 270 - float(i)*diff3
      end do
      
      rlima = 180
      diff3 = rlima/float(nbin2)
      
      do i = 1,nbin2
        bv3(i) = 90 - float(i-1)*diff3
        ev3(i) = 90 - float(i)*diff3
      end do

      rlima = 180
      diff3 = rlima/float(nbin2)

      do i = 1,nbin2
        bv4(i) = float(i-1)*diff3
        ev4(i) = float(i)*diff3
      end do

      do i = 1,nmax
      
        read(1,'(a37,f5.1,f6.1,a23)',end=2222)dumb,theta,phi

        rinc1 = atan(2*tan(theta*fac))
        ffactor1 = sqrt(1+3.*sin(theta*fac)**2)

        do j = 1,nmax
      
          read(1,'(a8,i3,f6.1,1x,f5.1,1x,f6.1,1x,f6.1,1x,f6.1,
     +      2x,f6.1,2x,f5.1)')
     +      rlabel8,nnn,rf1,rfsig1,rd1,ri1,alpha

          if (rlabel8 .eq. '1000    ') then
            go to 1111
          end if

          if (rf1 .ne. 999.9) then
            nf = nf + 1
            rf1 = rf1*ffactorfix/ffactor1
            rf(nf) = rf1
          end if
          if (ri1 .ne. 99.9) then
            ni = ni + 1
            ri1 = ri1 + 1e-9
            ri1 = ri1 + (rincfix - rinc1)/fac
            ri(ni) = ri1
          end if

          if (rd1 .ne. 999.9) then
            if (rd1 .gt. 270.) rd1 = rd1 - 360
            if (rd1 .lt. -90.) rd1 = rd1 + 360
            nd = nd + 1
            rd(nd) = rd1

            xxx1 = cos(ri1*fac)*cos(rd1*fac)
            yyy1 = cos(ri1*fac)*sin(rd1*fac)
            zzz1 = sin(ri1*fac)
            aaa = (xxx1*rmxsave+yyy1*rmysave+zzz1*rmzsave)/rmfsave
            ra(nd) = acos(aaa)/fac

          end if

        end do

 1111   continue
 
      end do

 2222 continue

      write(*,*)' '
      write(*,*)'Computer is preparing some plot files now.'
      write(*,*)' '
      write(*,*)'Start by sorting the data.'
      write(*,*)' '
      
      call sort(nf,rf)
      call sort(ni,ri)
      call sort(nd,rd)
      call sort(nd,ra)

      do i = 1,nf
        rfc(i) = float(i)/float(nf)
        do iii = 1,nbin1
          if (rf(i).gt.bv1(iii).and.rf(i).le.ev1(iii)) then
            nfb(iii) = nfb(iii) + 1
          end if
        end do
      end do

      do i = 1,ni
        ric(i) = float(i)/float(ni)
        do iii = 1,nbin2
          if (ri(i).lt.bv3(iii).and.ri(i).ge.ev3(iii)) then
            nib(iii) = nib(iii) + 1
          end if
        end do
      end do

      do i = 1,nd
        rdc(i) = float(i)/float(nd)
        do iii = 1,nbin2
          if (rd(i).lt.bv2(iii).and.rd(i).ge.ev2(iii)) then
            ndb(iii) = ndb(iii) + 1
          end if
        end do
      end do

      do i = 1,nd
        rac(i) = float(i)/float(nd)
        do iii = 1,nbin2
          if (ra(i).gt.bv4(iii).and.ra(i).le.ev4(iii)) then
            nab(iii) = nab(iii) + 1
          end if
        end do
      end do

      write(36,'(3(e10.3,1x))')rfc(1),rf(1)
      do i = 2,nf
        write(36,'(3(e10.3,1x))')rfc(i),rf(i-1)
        write(36,'(3(e10.3,1x))')rfc(i),rf(i)
      end do

      write(37,'(3(e10.3,1x))')ric(1),ri(1)
      do i = 2,ni
        write(37,'(3(e10.3,1x))')ric(i),ri(i-1)
        write(37,'(3(e10.3,1x))')ric(i),ri(i)
      end do

      write(38,'(3(e10.3,1x))')rdc(1),rd(1)
      do i = 2,nd
        write(38,'(3(e10.3,1x))')rdc(i),rd(i-1)
        write(38,'(3(e10.3,1x))')rdc(i),rd(i)
      end do

      write(39,'(3(e10.3,1x))')rac(1),ra(1)
      do i = 2,nd
        write(39,'(3(e10.3,1x))')rac(i),ra(i-1)
        write(39,'(3(e10.3,1x))')rac(i),ra(i)
      end do

      do i = 1,nbin1
        diff = ev1(i) - bv1(i)
        rnf(i) = float(nfb(i))/diff
      end do
      
      do i = 1,nbin2
        diff = bv3(i) - ev3(i)
        rni(i) = float(nib(i))/diff
      end do
      
      do i = 1,nbin2
        diff = bv2(i) - ev2(i)
        rnd(i) = float(ndb(i))/diff
      end do

      do i = 1,nbin2
        diff = ev4(i) - bv4(i)
        rna(i) = float(nab(i))/diff
      end do

      do i = 1,nbin1
        rnf(i) = rnf(i)/float(nf)
      end do
      do i = 1,nbin2
        rni(i) = rni(i)/float(ni)
      end do
      do i = 1,nbin2
        rnd(i) = rnd(i)/float(nd)
      end do
      do i = 1,nbin2
        rna(i) = rna(i)/float(nd)
      end do
      
      do i = 1,nbin1
        write(16,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,bv1(i),nfb(i),rnf(i)
        write(16,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,ev1(i),nfb(i),rnf(i)
      end do
      
      do i = 1,nbin2
        write(17,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,bv3(i),nib(i),rni(i)
        write(17,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,ev3(i),nib(i),rni(i)
      end do

      do i = 1,nbin2
        write(18,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,bv2(i),ndb(i),rnd(i)
        write(18,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,ev2(i),ndb(i),rnd(i)
      end do

      do i = 1,nbin2
        write(19,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,bv4(i),nab(i),rna(i)
        write(19,'(i3,1(2x,e10.3),2x,i4,2x,e10.3)')
     +    i,ev4(i),nab(i),rna(i)
      end do

      write(*,*)' '
      write(*,*)'Have finished sorting the data.'
      write(*,*)' '
      write(*,*)'Preparing intensity distribution files.'
      write(*,*)' '

      diff3 = rlimf/float(200)
      
      do i = 0,200
        rf1 = i*diff3
        call rfdistf(rmfsave,rmssave,rf1,rdistf,rdistfc)
        write(26,'(3(e10.3,1x))')rf1,rdistf,rdistfc
      end do

      write(*,*)' '
      write(*,*)'Have finished intensity files.'
      write(*,*)' '
      write(*,*)'Preparing inclination distribution files.'
      write(*,*)' '

      do i = -90,90
        ri1 = i*fac
        call rfdisti(rmfssave,rmisave,ri1,rdisti,rdistic)
        rdisti = rdisti*pi/180.
        write(27,'(i4,3(1x,e10.3))')i,rdisti,rdistic
      end do
 
      write(*,*)' '
      write(*,*)'Have finished inclination files.'
      write(*,*)' '
      write(*,*)'Preparing declination distribution files.'
      write(*,*)' '

      do i = -90,270
        rd1 = i*fac
        call rfdistd(rmfssave,rmisave,rmdsave,rd1,rdistd,rdistdc)
        rdistd = rdistd*pi/180.
        write(28,'(i4,3(1x,e10.3))')i,rdistd,rdistdc
      end do
 
      write(*,*)' '
      write(*,*)'Have finished declination files.'
      write(*,*)' '
      write(*,*)'Preparing off-axis angle distribution files.'
      write(*,*)' '

      do i = 0,180
        ri1 = i*fac
        call rfdista(rmfssave,ri1,rdista,rdistac)
        rdista = rdista*pi/180.
        write(29,'(i4,4(1x,e10.3))')i,rdista,rdistac
      end do

      stop
      end

      subroutine rfdistf(rmf,rms,rf,distf,distfc)

      data pi/3.14159265358979323846264338328/

c     formulas D1 and D9

      distf = (exp(-rf**2/(2.*rms**2) - rmf**2/(2.*rms**2))*
     -     sqrt(2/pi)*rf*
     -     sinh((rf*rmf)/rms**2))/(rmf*rms)

      dumb1 = (rf - rmf)/rms
      dumb2 = (rf + rmf)/rms

      distfc = 0.5*(erf(dumb1/sqrt(2.)) + erf(dumb2/sqrt(2.))) -
     +  rms/(sqrt(2*pi)*rmf)*(exp(-0.5*dumb1**2) - exp(-0.5*dumb2**2))

      distfc = ((-exp(-(rf - rmf)**2/(2.*rms**2)) + 
     -    exp(-(rf + rmf)**2/(2.*rms**2)))*
     -      sqrt(2/pi)*rms + rmf*erf((rf - rmf)/(sqrt(2.)*rms)) + 
     -     rmf*erf((rf + rmf)/(sqrt(2.)*rms)))/(2.*rmf)
      
      return
      end

      subroutine rfdisti(rmfs,rmi,ri,disti,distic)

      data pi/3.14159265358979323846264338328/

c     formulas F1 and F6

      nmax = 12

c     if more precision is needed, you can change nmax to a larger number
c     but this, then, will probably require compilation in double precision

      disti1 = 0
      disti2 = 0
      distic = 0
      dumbc = rmfs*cos(rmi)*cos(ri)
      dumbs = rmfs*sin(rmi)*sin(ri)

      do m = 0,nmax
        m2 = 2*m
        do n = 0,nmax
          n2 = 2*n

          disti1 = disti1 + exp(factfactln(m2+n2+1) -  
     +      factfactln(m2) - factfactln(m2) - factln(n2))*
     +      dumbc**m2*dumbs**n2

          disti2 = disti2 + exp(factfactln(m2+n2+2) -  
     +      factfactln(m2) - factfactln(m2) - factln(n2+1))*
     +      dumbc**m2*dumbs**(n2+1)

          dumb01 = exp(-factfactln(m2) - 
     +      factfactln(n2))*rmfs**(m2+n2)*cos(rmi)**m2*
     +      sin(rmi)**n2

          dumb02 = exp(-factfactln(m2) - 
     +      factfactln(n2+1))*rmfs**(m2+n2+1)*cos(rmi)**m2*
     +      sin(rmi)**(n2+1)

          dumb1 = exp(-factfactln(m2) - 
     +      factln(n2))*rmfs**(m2+n2)*cos(rmi)**m2*
     +      sin(rmi)**n2*sin(ri)**(n2+1)

          dumb2 = exp(-factfactln(m2) - 
     +      factln(n2+1))*rmfs**(m2+n2+1)*cos(rmi)**m2*
     +      sin(rmi)**(n2+1)*sin(ri)**(n2+2)

          temp1 = 0
          temp2 = 0

          do j = 0,m

            j2 = 2*j

            temp1 = temp1 + exp(factfactln(n2+m2-j2-1) -
     +         factfactln(m2-j2))*cos(ri)**(m2-j2)

            temp2 = temp2 + exp(factfactln(n2+m2-j2) -
     +         factfactln(m2-j2))*cos(ri)**(m2-j2)

          end do

          distic = distic + dumb01/2. - dumb02/sqrt(2*pi) +  
     +      dumb1*temp1/2. + dumb2*temp2/sqrt(2*pi) 

        end do
      end do
        
      dumb   = cos(ri)*exp(-0.5*rmfs**2)
      disti  = dumb*(disti1/2.+disti2/sqrt(2*pi))
      distic = distic*exp(-0.5*rmfs**2)

      return
      end

      subroutine rfdistd(rmfs,rmi,rmd,rd,distd,distdc)

      data pi/3.14159265358979323846264338328/

c     formulas G1 and G7 and G8

      nmax = 12

c     if more precision is needed, you can change nmax to a larger number
c     but this, then, will probably require compilation in double precision

      distd1  = 0
      distd1c = 0
      distd2  = 0
      distd2c = 0

      do n = 0,nmax

        n2 = 2*n

        call frdintegral1(rmi,rmd,n,rd,rfdintegral1)
        distd1 = distd1 + rfdintegral1*rmfs**n2

        call frdintegral1c(rmi,rmd,n,rd,rfdintegral1)
        distd1c = distd1c + rfdintegral1*rmfs**n2

        call frdintegral2(rmi,rmd,n,rd,rfdintegral2)
        distd2 = distd2 + rfdintegral2*rmfs**(n2+1)

        call frdintegral2c(rmi,rmd,n,rd,rfdintegral2)
        distd2c = distd2c + rfdintegral2*rmfs**(n2+1)

      end do

      dumb  = exp(-0.5*rmfs**2)
      distd = dumb*(distd1/(4*pi) + distd2/(2*pi)**(1.5))
      distdc = dumb*(distd1c/(4*pi) + distd2c/(2*pi)**(1.5))

      return
      end

      subroutine frdintegral1(rmi,rmd,n,rd,rfdintegral1)

      data pi/3.14159265358979323846264338328/

      rfdintegral1 = 0

      rmh = cos(rmi)*cos(rmd)*cos(rd) + cos(rmi)*sin(rmd)*sin(rd)
      rmz = sin(rmi)

      n2 = 2.*n

      do k = 0,n

        k2 = 2.*k

        dumb = rmh**(k2)*rmz**(n2-k2)*
     +    exp(-factfactln(n2-k2) - factfactln(k2-1))

        rfdintegral1 = rfdintegral1 + dumb
      
      end do

      rfdintegral1 = 2*rfdintegral1

      return
      end

      subroutine frdintegral2(rmi,rmd,n,rd,rfdintegral2)

      data pi/3.14159265358979323846264338328/

      rfdintegral2 = 0

      rmh = cos(rmi)*cos(rmd)*cos(rd) + cos(rmi)*sin(rmd)*sin(rd)
      rmz = sin(rmi)

      n2 = 2.*n

      do k = 0,n

        k2 = 2.*k

        dumb = rmh**(k2+1)*rmz**(n2-k2)*
     +    exp(-factfactln(n2-k2) - factfactln(k2))

        rfdintegral2 = rfdintegral2 + dumb
      
      end do

      rfdintegral2 = pi*rfdintegral2

      return
      end

      subroutine frdintegral1c(rmi,rmd,m,rd,rfdintegral1)

      data pi/3.14159265358979323846264338328/

      rfdintegral1 = 0

      rmz = sin(rmi)

      m2 = 2*m

      do n = 0,m

        n2 = 2*n

        dumb = rmz**(m2-n2)*exp(-factfactln(m2-n2))

        rint = 0

c        if (n .eq. 0) then

c          rint = (rd + pi/2.)

c        else

        do j = 0,n2

          dumb0 = exp(factfactln(j-1) - factln(j) - factln(n2-j))*
     +      (cos(rmi)*cos(rmd))**j*(cos(rmi)*sin(rmd))**(n2-j)

          if (mod(j,2) .eq. 0) then
          
            dumb1 = 0

            do k = 0,(j/2-1)
    
              k2 = 2*k

              dumb1 = dumb1 + exp(factfactln(n2-k2-2) - 
     +          factfactln(j-k2-1))*cos(rd)**(j-k2-1)

            end do

            dumb1 = dumb1*sin(rd)**(n2-j+1)
      
            dumb2 = 0

            do k = 0,(n-j/2-1)
    
              k2 = 2*k

              dumb2 = dumb2 + (-1)**k*exp(-factln(k) - 
     +          factln(n2-j-k))*sin(rd*(n2-j-k2))/float(n2-j-k2)

            end do
       
            dumb2 = dumb2*(-1)**(n-j/2)*exp(factln(n2-j) + 
     +        factfactln(n2-j))/2.**(n2-j-1)

            dumb3 = exp(factfactln(n2-j-1))*(rd+pi/2.)

            rint = rint + (dumb1 + dumb2 + dumb3)*dumb0

          else
  
            dumb1 = 0

            klimit = float(j)/2. - 0.5

            do k = 0,klimit

              k2 = 2*k

              dumb1 = dumb1 + exp(factfactln(n2-k2-2) - 
     +          factfactln(j-k2-1))*cos(rd)**(j-k2-1)

            end do
  
            dumb1 = dumb1*sin(rd)**(n2-j+1)

            dumb2 = -exp(factfactln(n2-j-1))

            rint = rint + (dumb1 + dumb2)*dumb0

          end if


        end do

c        end if

        rfdintegral1 = rfdintegral1 + rint*dumb

      end do

      rfdintegral1 = 2*rfdintegral1

      return
      end

      subroutine frdintegral2c(rmi,rmd,m,rd,rfdintegral1)

      data pi/3.14159265358979323846264338328/

      rfdintegral1 = 0

      rmz = sin(rmi)

      m2 = 2*m

      do n = 0,m

        n2 = 2*n

        dumb = rmz**(m2-n2)*exp(-factfactln(m2-n2))

        rint = 0

c        if (n .eq. 0) then

c          rint = (sin(rd)+1)*cos(rmi)*cos(rmd) - 
c     +      cos(rd)*cos(rmi)*sin(rmd)

c        else

        do j = 0,(n2+1)

          dumb0 = exp(factfactln(j-1) - factln(j) - factln(n2-j+1))*
     +      (cos(rmi)*cos(rmd))**j*(cos(rmi)*sin(rmd))**(n2-j+1)

          if (mod(j,2) .eq. 0) then
          
            dumb1 = 0

            do k = 0,(j/2-1)
    
              k2 = 2*k

              dumb1 = dumb1 + exp(factfactln(n2-k2-1) - 
     +          factfactln(j-k2-1))*cos(rd)**(j-k2-1)

            end do

            dumb1 = dumb1*sin(rd)**(n2-j+2)
      
            dumb2 = 0

            do k = 0,(n-j/2)
    
              k2 = 2*k

              dumb2 = dumb2 + (-1)**k*exp(-factln(k) - 
     +          factln(n2-j-k+1))*cos(rd*(n2-j-k2+1))/float(n2-j-k2+1)

            end do
       
            dumb2 = dumb2*(-1)**(n-j/2+1)*exp(factln(n2-j+1) + 
     +        factfactln(n2-j+1))/2.**(n2-j)

            rint = rint + (dumb1 + dumb2)*dumb0

          else
  
            dumb1 = 0

            klimit = float(j)/2. - 0.5

            do k = 0,klimit

              k2 = 2*k

              dumb1 = dumb1 + exp(factfactln(n2-k2-1) - 
     +          factfactln(j-k2-1))*cos(rd)**(j-k2-1)

            end do
  
            dumb1 = dumb1*sin(rd)**(n2-j+2)

            dumb2 = exp(factfactln(n2-j))

            rint = rint + (dumb1 + dumb2)*dumb0

          end if

        end do

c        end if

        rfdintegral1 = rfdintegral1 + rint*dumb

      end do

      rfdintegral1 = pi*rfdintegral1

      return
      end

      subroutine rfdista(rmfs,ri,dista,distac)

      data pi/3.14159265358979323846264338328/

c     formulas E1 and E8

      dista = 0

      dista = 
     +  0.5*(sqrt(2./pi)*rmfs*cos(ri) +
     +  (1+cos(ri)**2*rmfs**2)*
     +  exp(0.5*rmfs**2*cos(ri)**2)*
     +  (1+erf(1./sqrt(2.)*rmfs*cos(ri))))

      distac = 0.5*(1 + erf(1./sqrt(2.)*rmfs) - 
     +  cos(ri)*exp(-0.5*(rmfs)**2*sin(ri)**2)*
     +  (1+erf(cos(ri)*rmfs/sqrt(2.))))
        
      dumb  = exp(-0.5*rmfs**2)
      dista = dista*dumb*sin(ri)

      return
      end

      FUNCTION rlbico(n,k)
      INTEGER k,n
      REAL rlbico
CU    USES factln
      REAL factln
      rlbico=factln(n)-factln(k)-factln(n-k)
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      FUNCTION factln(n)
      INTEGER n
      REAL factln
CU    USES gammln
      REAL a(100),gammln
      SAVE a
      DATA a/100*-1./
      if (n.lt.0) then
        pause 'negative factorial in factln'
      end if
      if (n.le.99) then
        if (a(n+1).lt.0.) a(n+1)=gammln(n+1.)
        factln=a(n+1)
      else
        factln=gammln(n+1.)
      endif
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      FUNCTION gammln(xx)
      REAL gammln,xx
      INTEGER j
      DOUBLE PRECISION ser,stp,tmp,x,y,cof(6)
      SAVE cof,stp
      DATA cof,stp/76.18009172947146d0,-86.50532032941677d0,
     *24.01409824083091d0,-1.231739572450155d0,.1208650973866179d-2,
     *-.5395239384953d-5,2.5066282746310005d0/
      x=xx
      y=x
      tmp=x+5.5d0
      tmp=(x+0.5d0)*log(tmp)-tmp
      ser=1.000000000190015d0
      do 11 j=1,6
        y=y+1.d0
        ser=ser+cof(j)/y
11    continue
      gammln=tmp+log(stp*ser/x)
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.
      
      SUBROUTINE sort(n,arr)
      INTEGER n,M,NSTACK
      REAL arr(n)
      PARAMETER (M=7,NSTACK=5000)
      INTEGER i,ir,j,jstack,k,l,istack(NSTACK)
      REAL a,temp
      jstack=0
      l=1
      ir=n
1     if(ir-l.lt.M)then
        do 12 j=l+1,ir
          a=arr(j)
          do 11 i=j-1,1,-1
            if(arr(i).le.a)goto 2
            arr(i+1)=arr(i)
11        continue
          i=0
2         arr(i+1)=a
12      continue
        if(jstack.eq.0)return
        ir=istack(jstack)
        l=istack(jstack-1)
        jstack=jstack-2
      else
        k=(l+ir)/2
        temp=arr(k)
        arr(k)=arr(l+1)
        arr(l+1)=temp
        if(arr(l+1).gt.arr(ir))then
          temp=arr(l+1)
          arr(l+1)=arr(ir)
          arr(ir)=temp
        endif
        if(arr(l).gt.arr(ir))then
          temp=arr(l)
          arr(l)=arr(ir)
          arr(ir)=temp
        endif
        if(arr(l+1).gt.arr(l))then
          temp=arr(l+1)
          arr(l+1)=arr(l)
          arr(l)=temp
        endif
        i=l+1
        j=ir
        a=arr(l)
3       continue
          i=i+1
        if(arr(i).lt.a)goto 3
4       continue
          j=j-1
        if(arr(j).gt.a)goto 4
        if(j.lt.i)goto 5
        temp=arr(i)
        arr(i)=arr(j)
        arr(j)=temp
        goto 3
5       arr(l)=arr(j)
        arr(j)=a
        jstack=jstack+2
        if(jstack.gt.NSTACK)pause 'NSTACK too small in sort'
        if(ir-i+1.ge.j-l)then
          istack(jstack)=ir
          istack(jstack-1)=i
          ir=j-1
        else
          istack(jstack)=j-1
          istack(jstack-1)=l
          l=i
        endif
      endif
      goto 1
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      FUNCTION gasdev(idum)
      INTEGER idum
      REAL gasdev
CU    USES ran2
      INTEGER iset
      REAL fac,gset,rsq,v1,v2,ran2
      SAVE iset,gset
      DATA iset/0/
      if (iset.eq.0) then
1       v1=2.*ran2(idum)-1.
        v2=2.*ran2(idum)-1.
        rsq=v1**2+v2**2
        if(rsq.ge.1..or.rsq.eq.0.)goto 1
        fac=sqrt(-2.*log(rsq)/rsq)
        gset=v1*fac
        gasdev=v2*fac
        iset=1
      else
        gasdev=gset
        iset=0
      endif
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      FUNCTION ran2(idum)
      INTEGER idum,IM1,IM2,IMM1,IA1,IA2,IQ1,IQ2,IR1,IR2,NTAB,NDIV
      REAL ran2,AM,EPS,RNMX
      PARAMETER (IM1=2147483563,IM2=2147483399,AM=1./IM1,IMM1=IM1-1,
     *IA1=40014,IA2=40692,IQ1=53668,IQ2=52774,IR1=12211,IR2=3791,
     *NTAB=32,NDIV=1+IMM1/NTAB,EPS=1.2e-7,RNMX=1.-EPS)
      INTEGER idum2,j,k,iv(NTAB),iy
      SAVE iv,iy,idum2
      DATA idum2/123456789/, iv/NTAB*0/, iy/0/
      if (idum.le.0) then
        idum=max(-idum,1)
        idum2=idum
        do 11 j=NTAB+8,1,-1
          k=idum/IQ1
          idum=IA1*(idum-k*IQ1)-k*IR1
          if (idum.lt.0) idum=idum+IM1
          if (j.le.NTAB) iv(j)=idum
11      continue
        iy=iv(1)
      endif
      k=idum/IQ1
      idum=IA1*(idum-k*IQ1)-k*IR1
      if (idum.lt.0) idum=idum+IM1
      k=idum2/IQ2
      idum2=IA2*(idum2-k*IQ2)-k*IR2
      if (idum2.lt.0) idum2=idum2+IM2
      j=1+iy/NDIV
      iy=iv(j)-idum2
      iv(j)=idum
      if(iy.lt.1)iy=iy+IMM1
      ran2=min(AM*iy,RNMX)
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      FUNCTION factfactln(n)
      INTEGER n
      REAL factfactln
CU    USES gammln
      REAL a(100),gammln
      SAVE a
      data pi/3.14159265358979323846264338328/
      DATA a/100*-1./
      if (n.lt.-1) then
        pause 'negative factorial in factln'
      end if
      if (n.eq.-1) then
        factfactln=0
        return
      end if
      if (mod(n,2) .eq. 0) then
        nn = n/2
        if (n.le.99) then
          if (a(n+1).lt.0.) a(n+1)=factln(nn)+nn*log(2.)
          factfactln=a(n+1)
        else
          factfactln=factln(nn)+nn*log(2.)
        endif
      else
        rn = float(n)/2.
        if (n.le.99) then
          if (a(n+1).lt.0.) a(n+1)=gammln(rn+1.)+
     +      rn*log(2.)+0.5*log(2./pi)
          factfactln=a(n+1)
        else
          factfactln=gammln(rn+1.)+rn*log(2.)+0.5*log(2./pi)
        endif
      end if
      return
      END

      FUNCTION erf(x)
      REAL erf,x
CU    USES gammp
      REAL gammp
      if(x.lt.0.)then
        erf=-gammp(.5,x**2)
      else
        erf=gammp(.5,x**2)
      endif
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      FUNCTION gammp(a,x)
      REAL a,gammp,x
CU    USES gcf,gser
      REAL gammcf,gamser,gln
      if(x.lt.0..or.a.le.0.)pause 'bad arguments in gammp'
      if(x.lt.a+1.)then
        call gser(gamser,a,x,gln)
        gammp=gamser
      else
        call gcf(gammcf,a,x,gln)
        gammp=1.-gammcf
      endif
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      SUBROUTINE gcf(gammcf,a,x,gln)
      INTEGER ITMAX
      REAL a,gammcf,gln,x,EPS,FPMIN
      PARAMETER (ITMAX=100,EPS=3.e-7,FPMIN=1.e-30)
CU    USES gammln
      INTEGER i
      REAL an,b,c,d,del,h,gammln
      gln=gammln(a)
      b=x+1.-a
      c=1./FPMIN
      d=1./b
      h=d
      do 11 i=1,ITMAX
        an=-i*(i-a)
        b=b+2.
        d=an*d+b
        if(abs(d).lt.FPMIN)d=FPMIN
        c=b+an/c
        if(abs(c).lt.FPMIN)c=FPMIN
        d=1./d
        del=d*c
        h=h*del
        if(abs(del-1.).lt.EPS)goto 1
11    continue
      pause 'a too large, ITMAX too small in gcf'
1     gammcf=exp(-x+a*log(x)-gln)*h
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.

      SUBROUTINE gser(gamser,a,x,gln)
      INTEGER ITMAX
      REAL a,gamser,gln,x,EPS
      PARAMETER (ITMAX=100,EPS=3.e-7)
CU    USES gammln
      INTEGER n
      REAL ap,del,sum,gammln
      gln=gammln(a)
      if(x.le.0.)then
        if(x.lt.0.)pause 'x < 0 in gser'
        gamser=0.
        return
      endif
      ap=a
      sum=1./a
      del=sum
      do 11 n=1,ITMAX
        ap=ap+1.
        del=del*x/ap
        sum=sum+del
        if(abs(del).lt.abs(sum)*EPS)goto 1
11    continue
      pause 'a too large, ITMAX too small in gser'
1     gamser=sum*exp(-x+a*log(x)-gln)
      return
      END
C  (C) Copr. 1986-92 Numerical Recipes Software *%&&,1{.
