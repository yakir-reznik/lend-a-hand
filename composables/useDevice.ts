export const isMobile = window?.matchMedia('screen and (max-width: 767px)').matches

export const isTablet = window?.matchMedia('screen and (min-width: 768px) and (max-width: 1260px)').matches

export const isDesktop = window?.matchMedia('screen and (min-width: 1260px)').matches

export const userDevice = isMobile ? 'mobile' : isTablet ? 'tablet' : 'desktop'
