      program lavadata

c     makes simulated data by intensity and direction 
c     for bimodal gaussian distribution, site latitude is
c     determined by local mean inclination

      parameter(nmax=500)
      character*8 rlabel8
      character*37 dumb

      data pi/3.14159265358979323846264338328/
      fac = pi/180.

      open(1,file='simdata',status='unknown')

      write(*,*)' '
      write(*,*)'This program generates simulated paleomagnetic data.'
      write(*,*)'of the format needed to run lavamax.f. The site'
      write(*,*)'latitude is afixed to the top of the output file'
      write(*,*)'corresponding to a dipole for the inclination of'
      write(*,*)'the mean vector'
      write(*,*)' '
      write(*,*)'The bulk of this program was written by J. J. Love.'
      write(*,*)'A few numerical Recipes routines are used, as well.'
      write(*,*)' '
      write(*,*)'Enter the mean Cartessian components x,y,z'
      write(*,*)' '
      read(*,*)rmxsave,rmysave,rmzsave
      write(*,*)' '
      write(*,*)'Enter the vectorial dispersion (sigma).'
      write(*,*)' '
      read(*,*)rmssave
      
      rmhsave  = sqrt(rmxsave**2+rmysave**2)
      rmfsave  = sqrt(rmxsave**2+rmysave**2+rmzsave**2)
      rmfssave = rmfsave/rmssave
      rmisave  = asin(rmzsave/rmfsave)
      rmdsave  = atan2(rmysave,rmxsave)

      theta = atan(0.5*tan(rmisave))/fac

      dumb = ' '
      write(1,'(a37,f5.1,f6.1,a23)')dumb,theta,phi
      do j = 1,nmax
      
c       get random data

        x = rmxsave + rmssave*gasdev(idumb)
        y = rmysave + rmssave*gasdev(idumb)
        z = rmzsave + rmssave*gasdev(idumb)

        rf = sqrt(x**2 + y**2 + z**2)
        rh = sqrt(x**2 + y**2)
        ri = asin(z/rf)/fac
        rd = atan2(y,x)/fac
        ra = (x*rmxsave+y*rmysave+z*rmzsave)/(rf*rmfsave)
        ra = acos(ra)/fac
        if (rd .gt. 270.) rd = rd - 360
        if (rd .lt. -90.) rd = rd + 360

        write(1,'(i6,2x,i3,f6.1,1x,f5.1,1x,f6.1,1x,f6.1,1x,f6.1,
     +        2x,f6.1,2x,f5.1)')
     +        j,nnn,rf,rfsig1,rd,ri,alpha
                                
c       get random data

        x = -rmxsave + rmssave*gasdev(idumb)
        y = -rmysave + rmssave*gasdev(idumb)
        z = -rmzsave + rmssave*gasdev(idumb)

        rf = sqrt(x**2 + y**2 + z**2)
        rh = sqrt(x**2 + y**2)
        ri = asin(z/rf)/fac
        rd = atan2(y,x)/fac
        ra = (x*rmxsave+y*rmysave+z*rmzsave)/(rf*rmfsave)
        ra = acos(ra)/fac
        if (rd .gt. 270.) rd = rd - 360
        if (rd .lt. -90.) rd = rd + 360

        write(1,'(i6,2x,i3,f6.1,1x,f5.1,1x,f6.1,1x,f6.1,1x,f6.1,
     +        2x,f6.1,2x,f5.1)')
     +        j,nnn,rf,rfsig1,rd,ri,alpha
                                
      end do
      rlabel8 = '1000    '
      write(1,'(a8)')rlabel8
      
      stop
      end



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

