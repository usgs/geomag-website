<?php
// Author: Lisa Wald
// Contact: Jeffrey Love
  if (!isset($TEMPLATE)) {
    $TITLE = 'Keeping the Lights On in North America';
    $NAVIGATION = true;
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    include 'template.inc.php';
  }
?>

<!--
<p>
  <a href="geoelect-maps.pdf">
    <i class="material-icons">save_alt</i> Download PDF
  </a>
</p>
-->

<figure class='right'>
<img src="images/dnb_united_states_lrg.jpg" alt="US at night from space showing lights"/>
<figcaption>
</figcaption>
</figure>

<p>
  Dynamic events on the Sun’s surface can affect the Earth and technological systems of importance to modern society. The charged particles of the solar wind interact with the geomagnetic field of the Earth’s surrounding space environment. Usually, this interaction is relatively subdued, but every once in a while the Sun emits a burst of solar wind that causes temporary disturbance in the Earth’s magnetic field &ndash; a magnetic storm.
</p>
<p>
  Magnetic storms can wreak havoc on the electric power grids and communication lines. In <a href="https://www.sciencedirect.com/science/article/pii/S0273117706000214">September of 1859, a magnetic superstorm</a> caused widespread interference to telegraph systems, even sparking fires at some telegraph stations. In March of 1989, an intense magnetic storm caused a black-out across Qu&eacute;bec; in November of 2001 another storm caused the failure of electrical power transmission in New Zealand; and yet another in October of 2003, called the Halloween storm, brought significant interference to the power-grid system in Sweden. Several studies, including one issued by the <a href="https://www.nap.edu/catalog/12507/severe-space-weather-events-understanding-societal-and-economic-impacts-a">National Academy of Sciences</a>, suggest that the future occurrence of a magnetic superstorm could cause widespread blackouts that would carry significant economic cost.
</p>

<h2>Geoelectric Hazards</h2>

<figure class='left'>
<img src="images/powerlines.jpg" alt="US at night from space showing lights"/>
<figcaption>
</figcaption>
</figure>


<p>
  A hazard is the probability that a dangerous natural phenomenon will occur in a given window of time, with a certain size, and in a given location. So, for example, a 100-year geoelectric hazard is the amplitude of the geoelectric field that is only attained or exceeded at a given location once per century on average. The 100-year geoelectric hazard level is the standard used by electric utility companies for investigating the resilience of their systems to the effects of rare, but very intense magnetic storms. <a href="https://eos.org/features/magnetic-storms-induction-hazards">Maps of 100-year geoelectric hazards</a> assist utility company engineers as they examine which parts of distributed power-grid networks are more exposed, or, conversely, less exposed, to the deleterious effects of magnetic storms.
</p>
<p>
  The geoelectric hazard at any particular location depends on both the regional intensity of geomagnetic activity and on the electrical conductivity of the surrounding rock and deeper Earth material. To create a geoelectric hazard map, research scientists of the U.S. Geological Survey’s Geomagnetism Program analyze historical records of magnetic storms acquired at long-running magnetic observatories, including <a href="https://agupubs.onlinelibrary.wiley.com/doi/full/10.1029/2011SW000684">those operated by the USGS</a> across the continental United States. This analysis is then combined with <a href="https://en.wikipedia.org/wiki/Magnetotellurics">magnetotelluric</a> measurements of the relationship between geomagnetic activity and the induced geoelectric field, such as those that have been made at various geographic sites across the continental United States as part of the National Science Foundation’s <a href="http://www.usarray.org/researchers/obs/magnetotelluric">EarthScope</a> project.
</p>
<p>
  Recently, Geomagnetism Program scientists have concentrated on regional mapping of geoelectric hazards across the <a href="https://agupubs.onlinelibrary.wiley.com/doi/abs/10.1029/2018SW001844">Pacific Northwest</a> and the <a href="https://agupubs.onlinelibrary.wiley.com/doi/full/10.1002/2017GL076042">Eastern United States</a>. This work shows that geoelectric hazards maps are closely correlated with geologic structures. During a magnetic storm, conducting rock allow currents to flow in the Earth in response to a weak geoelectric field. These currents flow relatively easily through rock that is relatively electrically conductive, and less easily through rock that is relatively resistive. All of this means that, during a magnetic storm, electric currents, driven by geoelectric fields in the Earth, will tend to be diverted through electric power grids if they are situated atop electrically resistive rock.
</p>
<h2>Voltages on Power Grids</h2>
<figure>
<img src="images/powerlines.v2.gif" alt=""/>
<figcaption>
  Schematic showing a current (J0) in the space environment above the Earth’s surface of increasing intensity over time. This current generates a magnetic fields (B) that is also increasing in intensity over time. This magnetic field, in turn, induces geoelectric fields (E) in the Earth, generally of high (low) amplitude within rock of low conductivity (high conductivity). These geoelectric fields, in turn, drive electric currents (J1) that flow from the Earth, through ground connections at transformer substations and across high-voltage transmission lines.
</figcaption>
</figure>

<p>
  By integrating the geoelectric field induced during a magnetic storm along a power-grid line, one can estimate the voltage on the line. <a href="https://agupubs.onlinelibrary.wiley.com/doi/10.1002/2017SW001779">During an intense magnetic storm, hundreds, and even thousands, of volts can be generated on long power lines</a>. These voltages are not the carefully controlled alternating voltages provided by generating stations, and, indeed, geomagnetically induced voltages can drive uncontrolled currents on power grids that are of sufficient strength to damage transformers. If many transformers are damaged, as might happen during a magnetic superstorm, the result could be prolonged loss of electric power across a broad region of the United States.
</p>

<h2>Real-Time Geoelectric Maps</h2>
<p>
  An important ongoing project of the USGS and the National Oceanic and Atmospheric Administration is real-time mapping of geoelectric fields across the continental United States. To accomplish this, real-time maps of the geomagnetic field, created using data from magnetic observatories, are combined with magnetotelluric survey measurements to estimate the time-varying geoelectric field. These geoelectric field maps will assist utility companies with their real-time operations – enabling the assessment of geoelectric hazards as they evolve over the course of a magnetic storm and helping power-grid managers to make decisions that may minimize the impact to their systems.
</p>

<p>- written by Lisa Wald and Jeffrey Love, USGS, October 2018</p>

<h2>For More Information</h2>
<ul>
  <li>
    <a href="https://geomag.usgs.gov/research/featured/2018/elecstorm-1882/">The Electric Storm of November 1882</a>
  </li>
  <li>
    <a href="https://www.usgs.gov/natural-hazards/geomagnetism/science/introduction-geomagnetism">Introduction to Geomagnetism</a>
  </li>
  <li>
     Love, Jeffrey J., E. Joshua Rigler, Antti Pulkkinen, and Christopher C. Balch, 2014, <a href="https://eos.org/features/magnetic-storms-induction-hazards">Magnetic Storms and Induction Hazards</a>, Eos Trans. AGU, 95(48), 445–446, doi:10.1002/2014EO480001.
  </li>
  <li>
    Love, J.J., Rigler, E.J., Kelbert, Anna, Finn, C.A., Bedrosian, P.A., and Balch, C.C., 2018, <a href="https://doi.org/10.3133/ofr20181043">On the feasibility of real-time mapping of the geoelectric field across North America</a>: U.S. Geological Survey Open-File Report 2018-1043, 16 p.
  </li>
  <li>
    Love, J. J., Lucas, G. M., Kelbert, A., & Bedrosian, P. A. (2018). <a href="https://doi.org/10.1002/2017GL076042">Geoelectric hazard maps for the Mid-Atlantic United States: 100 year extreme values and the 1989 magnetic storm</a>. Geophysical Research Letters, 45, 5–14.
  </li>
  <li>
    Love, Jeffrey J., Lucas, G. M., Kelbert, A., & Bedrosian, P. A. (2018). <a href="https://doi.org/10.1029/2018SW001844">Geoelectric Hazard Maps for the Pacific Northwest</a>. Space Weather, 16, 1114-1127.
  </li>
  <li>
    Lucas, G. M., Love, J. J., &amp; Kelbert, A. (2018). <a href="https://doi.org/10.1002/2017SW001779">Calculation of voltages in electric power transmission lines during historic geomagnetic storms: An investigation using realistic earth impedances</a>. Space Weather, 16, 185–195.
  </li>
</ul>

<h2>The Scientists Behind the Science</h2>

<figure class='left'>
  <img class='staff' src="images/Love.jpg" alt="Jeff Love"/>
  <figcaption>
  </figcaption>
</figure>
<p>
  <strong><a href="https://www.usgs.gov/staff-profiles/jeffrey-j-love">Jeffrey J. Love</a></strong> has been a research geophysicist at the USGS since 2001. He analyzes geomagnetic hazards of concern to the electric-power grid industry. Jeffrey is also interested in art, history, and home repair.
</p>

<br style="clear:left;"/>

<figure class='left'>
  <img class='staff' src="images/Lucas.jpg" alt="Greg Lucas"/>
  <figcaption>
  </figcaption>
</figure>
<p>
  <strong>Greg Lucas</strong> is currently a Mendenhall Postdoctoral Fellow at the USGS. He has been investigating how geomagnetic fields induce voltages within the electric power grid. In his spare time, Greg enjoys running and biking on the local trails around Golden.
</p>

<br style="clear:left;"/>

<figure class='left'>
  <img class='staff' src="images/Bedrosian.jpg" alt="Paul Bedrosian"/>
  <figcaption>
  </figcaption>
</figure>

<p>
  <strong><a href="https://www.usgs.gov/staff-profiles/paul-a-bedrosian">Paul A. Bedrosian</a></strong> has been a research geophysicist at the USGS since 2005. His toolbox includes a range of ground and airborne techniques, which he applies to problems ranging from framework tectonics to groundwater resources to volcanic hazards. In his spare time he enjoys cooking, gardening, hiking, and skiing as well as visiting the many fine brew pubs that Colorado has to offer.
</p>

<br style="clear:left;"/>

<figure class='left'>
  <img class='staff' src="images/Kelbert.jpg" alt="Anna Kelbert"/>
  <figcaption>
  </figcaption>
</figure>

<p>
  <strong><a href="https://www.usgs.gov/staff-profiles/anna-kelbert">Anna Kelbert</a></strong> is a research geophysicist at the USGS since 2015. Her specialty is the electrical conductivity of the Earth's crust and mantle, and geophysical inverse methods that allow "peeking" deep into the Earth using the data collected at the surface. In her spare time, Anna enjoys hiking, gardening, ballroom dancing, philosophy, and (now that she's in Colorado) skiing with her two children.
</p>

<br style="clear:left;"/>

<figure class='left'>
  <img class='staff' src="images/Rigler.jpg" alt="Josh Rigler"/>
  <figcaption>
  </figcaption>
</figure>
<p>
  <strong>E. Joshua Rigler</strong> has been a research geophysicist at the USGS since 2011. He applies advanced statistics, signal processing, and machine learning techniques to geomagnetic time series analysis and hazard assessments. Josh is also interested in snowboarding, woodworking, science fiction, and convincing his two young children that all this is actually cool.
</p>
