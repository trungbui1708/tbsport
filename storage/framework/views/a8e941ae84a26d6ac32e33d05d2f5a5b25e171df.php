<?php $__env->startSection('content'); ?>
-->
 <div class="rs-point-table sec-spacer">
            <div class="container">
                <ul class="point-menu">
                    <h1>Bảng xếp hạng</h1>
                    <li class="active"><a data-toggle="tab" href="#sfl">Laliga</a></li>
                    <li><a data-toggle="tab" href="#efl">Premier League</a></li>
                    <li><a data-toggle="tab" href="#nfl">V-League</a></li>
                    <li><a data-toggle="tab" href="#ufa">FA</a></li>
                    <li><a data-toggle="tab" href="#world-cup">UFA</a></li>
                </ul>

                <div class="tab-content">
                    <div id="sfl" class="tab-pane fade in active">
                        <table>
                            
                            <tr>
                                <td></td>
                                <td class="team-name">Club</td>
                                <td>Match</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <?php $__currentLoopData = $rank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key->id); ?></td>
                                <td class="team-name" ><?php echo e($key->clubs->name); ?></td>
                                <td><?php echo e($key->number_match); ?></td>
                                <td><?php echo e($key->won); ?></td>
                                <td><?php echo e($key->draw); ?></td>
                                <td><?php echo e($key->lost); ?></td>
                                <td><?php echo e($key->goals_for); ?></td>
                                <td><?php echo e($key->goals_against); ?></td>
                                <td><?php echo e($key->goals_difference); ?></td>
                                <td><?php echo e($key->point); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                
                        </table>
                    </div>
                    <div id="efl" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Banani FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Badda FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Joypur FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Bramma FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Mirpur FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Kapa FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                        </table>
                    </div>
                    <div id="nfl" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Natrok FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Bogro FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Badda FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Mirpur FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Joypur FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Banani FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Bramma FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Kapa FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>                   
                        </table>
                    </div>
                    <div id="ufa" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Badda FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Banani FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Trishal FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Dohar FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Joypur FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Natrok FC</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr><tr>
                                <td>01</td>
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Banani FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Bogro FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>               
                        </table>
                    </div>
                    <div id="world-cup" class="tab-pane fade">
                        <table>
                            <tr>
                                <td></td>
                                <td class="team-name">TEAM</td>
                                <td>P</td>
                                <td>W</td>
                                <td>D</td>
                                <td>L</td>
                                <td>F</td>
                                <td>A</td>
                                <td>GD</td>
                                <td>PTS</td>
                            </tr>
                            <tr>
                                <td>01</td>
                                <td class="team-name">Trishal FC</td>
                                <td>60</td>
                                <td>35</td>
                                <td>08</td>
                                <td>16</td>
                                <td>02</td>
                                <td>04</td>
                                <td>11</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td>02</td> 
                                <td class="team-name">Badda FC</td>
                                <td>57</td>
                                <td>33</td>
                                <td>07</td>
                                <td>17</td>
                                <td>02</td>
                                <td>04</td>
                                <td>10</td>
                                <td>93</td>
                            </tr>
                            <tr>
                                <td>03</td> 
                                <td class="team-name">Badda FC</td>
                                <td>60</td>
                                <td>32</td>
                                <td>12</td>
                                <td>18</td>
                                <td>02</td>
                                <td>04</td>
                                <td>8</td>
                                <td>92</td>
                            </tr>
                            <tr>
                                <td>04</td> 
                                <td class="team-name">Barmma FC</td>
                                <td>58</td>
                                <td>35</td>
                                <td>08</td>
                                <td>14</td>
                                <td>02</td>
                                <td>05</td>
                                <td>7</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>05</td> 
                                <td class="team-name">Trishal FC</td>
                                <td>57</td>
                                <td>32</td>
                                <td>10</td>
                                <td>16</td>
                                <td>04</td>
                                <td>06</td>
                                <td>7</td>
                                <td>88</td>
                            </tr>
                            <tr>
                                <td>06</td>
                                <td class="team-name">Natrok FC</td>
                                <td>59</td>
                                <td>30</td>
                                <td>09</td>
                                <td>18</td>
                                <td>02</td>
                                <td>05</td>
                                <td>3</td>
                                <td>87</td>
                            </tr>
                            <tr>
                                <td>07</td>
                                <td class="team-name">Joypur FC</td>
                                <td>60</td>
                                <td>28</td>
                                <td>14</td>
                                <td>16</td>
                                <td>02</td>
                                <td>03</td>
                                <td>1</td>
                                <td>85</td>
                            </tr>
                            <tr>
                                <td>08</td>
                                <td class="team-name">Banani FC</td>
                                <td>60</td>
                                <td>27</td>
                                <td>18</td>
                                <td>16</td>
                                <td>02</td>
                                <td>07</td>
                                <td>-1</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td>09</td>
                                <td class="team-name">Barmma FC</td>
                                <td>60</td>
                                <td>16</td>
                                <td>14</td>
                                <td>17</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-3</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <td>10</td> 
                                <td class="team-name">Dohar</td>
                                <td>60</td>
                                <td>25</td>
                                <td>14</td>
                                <td>20</td>
                                <td>02</td>
                                <td>09</td>
                                <td>-5</td>
                                <td>80</td>
                            </tr>                   
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>