<?php
$bodyClass = 'single-article';
include("../../header.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <div class="container-fluid mt-5">
      <main class="row mt-5">
        <section id="header" class="position-absolute">
          <div class="container">
            <div class="row mb-4">
              <div class="col-12 p-0 position-relative">    
              <!-- change the folder -->
                <img class="header-image" src="articles/why_become_legacy_repost/Final_Website.png" alt="">
              </div>
            </div>
          </div>
        </section>
        <section id="content">
          <div class="container">
            <div class="row mb-4">
              <div class="col-12 col-lg-10 position-relative mx-auto bg-white">
                <div class="container">
                  <div class="row py-5">
                    <div class="col-12 col-lg-10 position-relative mx-auto bg-white">
                      <div class="meta d-flex justify-content-between my-3">
                        <div class='author'>
                          Velox commentary
                        </div>             
                        <!-- change the date -->
                        <div class='date'>
                          07 November 2023
                        </div>
                      </div>            
                      <br>
                      <!-- add title and put title within <h1></h1> tags -->
                      <h1>
Why do systems become legacy and is it avoidable?
</h1>  
                      
                      <!-- add header and put header within <h2></h2> tags -->
                      <p>
The term legacy gets bandied around a lot in capital markets. Why is it that so many user-facing systems start out life as offensive weapons but end up as corporate millstones?
</p>
                      
                      <!-- add paragraph and put paragraph within <p></p> tags -->
                      <p>
The obvious reason is that the underlying technology becomes obsolete. There is not much that can be done about that but it’s really only a small part of the story. Much of today’s legacy was written in Java so what gives?
Well, there are a bunch of other “lifestyle choices” whose effects aren’t obvious at the time but will seriously affect the systems life expectancy over time, either because they lead to reliability and scalability issues or speed of change deteriorates to the point where the system can no longer adapt to changing business needs.
<br><br>Here are some of the big “bad-habits” I have across in my career that are avoidable (with hindsight) and could significantly improve a systems quality of life in its “golden years”.

                      </p>    
                      
<p><h3>
Building carelessly because a deadline had to be hit
</p></h3>
                      <!-- add paragraph and put paragraph within <p></p> tags -->
                      <p>
The worst thing that you can do with software is force it to be built in a fixed timeframe. Even when a timeframe is set by the technology team before the project starts, it’s usually a good guess at best. When corners get cut to hit dates, it’s usually the features that are needed to sustain the platform over the long term that go out the window. Doing the work after go-live inevitably becomes the plan, but this can get lost in the wash of post go-live issues and new pressures.
                      </p>  
                      
<p><h3>
Not making the case for focusing on non-functionals
</p></h3>
       
                      <p>
Getting the project sponsors to really understand the importance of investing in testing, scalability, and resilience before it becomes a visible problem is a must for long term health. If this is not established in the beginning, the system’s life will be marred with constantly needing to fit a square cost peg into a (much) smaller round budget hole.
                      </p>  



<p><h3>
The business became mature and stopped needing change
</p></h3>
       
                      <p>
Without realizing it, sometimes the system goes into maintenance mode, the build out is done, the evolution of the new product or sales channel slows, and the required tech investment reduces significantly. This is a vulnerable time. If the funding is not kept above a minimum level, entropy will kick in and the system will go into decline fast.
                      </p>  

<p><h3>
The talent went elsewhere after the big build out
</p></h3>
       
                      <p>
In a perfect world, developers want to architect and build new things; when the heavy lifting is done, talent starts to look elsewhere. It is harder to attract talent to work on an existing system and even if you find people the change in personnel can really disrupt the productivity of a team.
                      </p>  

<p><h3>
The system was a “1 business wonder” and did not get used anywhere else
</p></h3>
       
                      <p>
Safety in numbers is critical. The more a system gets reused around a firm the better its chances of avoiding a premature “legacy” tag. But achieving adoption is tough. There is always a strong instinct from the business that using somebody else’s tech is going to be harder in the long run than building your own. Yes, it might be quicker, but will it do the job? and will i have enough control?          
</p>  


<p><h3>
It was not built to be operate effectively and efficiently by others
</p></h3>
       
                      <p>
When you sit down and design a system it is too easy to think about how to deliver the functionality and not focus on the tools needed to make it easy to operate. 40% of budget can get spent on support if it is not done right and much of this is because too much developer expertise and attention is required for too long.        
</p>  


<p><h3>
Lacking a strong culture of test-driven development
</p></h3>
       
                      <p>
If a system is not designed to be testable with tools that make test running and results evaluation efficient, the inability to test effectively will destroy a systems ability to change quickly and safely. It needs discipline to write tests (ideally before the code) and keep them updated as functionality changes.     
</p>  

<p><h3>
Insufficient code reviews and focus on code hygiene
</p></h3>
       
                      <p>
Being able to make assumptions about how a system behaves is important. This is achieved in part by maintaining a consistent implementation approach throughout its lifetime. Proper code reviews are one good way to achieve this. Keeping complexity under control is everything — simple systems become complex not always because of complex features but because there is no consistency and unused code is not pruned.   
</p>  

<p><h3>
Relationships with surrounding teams and departments are not effective
</p></h3>
       
                      <p>
Pretty much every system is affected by the systems around it, that it depends on to deliver its functionality. Systems and the teams that surround them, tend to become fortresses and relationships combative not co-operative. Borders between teams are always frictional and so clean interfaces and data contracts need to be implemented to take the emotion out of things.
</p>  


<p><h3>
So, building systems that stand the test of time is hard — what are the options?
</p></h3>
       
                      <p>
With the benefit of hindsight, it can be argued that the right software development tools will help a lot by removing the need to solve and re-solve many of these thorny issues. Many of which are common across all systems irrespective of the functionality they provide. Making systems stand the test of time is complicated and requires constant management throughout its lifetime.
<br> <br>Application development platforms such as vCore by Velox provide out-of-the-box solutions to many of the problems that lead to a system becoming legacy before its time. These platforms provide an application infrastructure, reduce build time and separate the data model from application architecture, future-proofing the ability to change or add functionality.  This buy-and-build approach reduces the execution risk of building and maintaining a system, ensuring you
get the right return on your investment over its lifespan.

</p>  



                      <p>At Velox our mission is to provide an application platform to our 
                      clients that maximizes their ability to innovate rapidly. Would be great to 
                      hear your opinions on factors that you think are missing.</p>

                      <h2>
                      Find out more about velox and how we <strong>#buildfaster</strong> <a href=
                      "https://www.veloxfintech.com/#body">here</a>.
                      </h2>
                      <div>
                        <br>
                      </div><strong>#capitalmarkets</strong> <strong>#technology</strong> <strong>#regulations</strong>
                      <strong>#veloxcore</strong> <strong>#vcore</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><?php
        include("../../footer.php");
        ?>
      </main>
    </div>
  </body>
</html>


