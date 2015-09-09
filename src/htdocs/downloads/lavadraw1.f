      program lavadraw

c     creates a file showing the various components of the 
c     uni-modal gaussian distribution

      data pi/3.14159265358979323846264338328/
      fac = pi/180.

      write(*,*)' '
      write(*,*)'This program creates a file giving the various'
      write(*,*)'component parts of a 3-D Gaussian distribution.'
      write(*,*)' '
      write(*,*)'The bulk of this program was written by J. J. Love.'
      write(*,*)'Several numerical Recipes routines are used.'
      write(*,*)' '
      write(*,*)'The format of the output file is like that generated'
      write(*,*)' by a companion program called lavacompare.f.'
      write(*,*)' '
      write(*,*)'Some of the subroutines used here are based on the'
      write(*,*)'partial summation of infinite series. If more'
      write(*,*)'precision is needed, you can change nmax in rfdisti'
      write(*,*)'and rfdistd from 12 or so to a larger number ... '
      write(*,*)'say 20 or so, but this, then, will probably require'
      write(*,*)'compilation in double precision.'
      write(*,*)' '
      write(*,*)'Enter a mean x, y, z, and dispersion (sigma)'
      write(*,*)' '
      read(*,*)rmxsave,rmysave,rmzsave,rmssave
      write(*,*)' '
      write(*,*)'Computer is preparing some plot files now.'

      rmhsave  = sqrt(rmxsave**2+rmysave**2)
      rmfsave  = sqrt(rmxsave**2+rmysave**2+rmzsave**2)
      rmfssave = rmfsave/rmssave
      rmisave  = asin(rmzsave/rmfsave)
      rmdsave  = atan2(rmysave,rmxsave)

      open(26,file='out.f.dis',status='unknown')
      open(27,file='out.i.dis',status='unknown')
      open(28,file='out.d.dis',status='unknown')
      open(29,file='out.a.dis',status='unknown')

      write(*,*)' '
      write(*,*)'Preparing intensity distribution files.'
      write(*,*)' '

      rlimf = 120
      diff3 = rlimf/float(200)
      
      do i = 0,200
        rf1 = i*diff3
        call rfdistf(rmfsave,rmssave,rf1,rdistf,rdistfc)
        write(26,'(3(e10.3,1x))')rf1,rdistf,rdistfc
      end do

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
      write(*,*)'Preparing declination distribution files.'
      write(*,*)' '

      do i = -90,270
        rd1 = i*fac
        call rfdistd(rmfssave,rmisave,rmdsave,rd1,rdistd,rdistdc)
        rdistd = rdistd*pi/180.
        write(28,'(i4,3(1x,e10.3))')i,rdistd,rdistdc
      end do
 
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
