@extends('layouts.app') 
@section('content')
<nav class="flex justify-between px-10 pt-10">
    <h3 class="uppercase tracking-wide font-bold text-grey-darkest">Cognition</h3>
    <a class="text-indigo no-underline" href="/login">Login <i class="fa fa-chevron-right"></i></a>
</nav>
<div id="landing-container" class="bg-no-repeat pt-10 text-grey-darkest max-w-full">

    <section class="max-w-md mx-auto px-5">
        <h1 class="mb-10">
            Get your students engaged in your online course, without drowning in work
        </h1>
        <p class="font-bold">So you made an online course</p>
        {{--
        <div class="flex items-center">
            <h2 class="mt-0 flex-1 text-center mb-0 flex items-center">This is Dave <i class="fa fa-arrow-right text-5xl ml-8"></i></h2>
            <div class="flex-1">
                <div class="border-white border-8 rounded shadow-md mb-2 rotate-right mt-3">
                    <img src="/images/photographer.jpg" alt="Man taking pictures on a city street." />
                    <p class="text-center m-2 font-handwritten">Hi, I'm Dave</p>
                </div>
            </div>
        </div> --}}
        <p>But now you have a problem.</p>
        {{--
        <p>
            Dave is a photographer. When he's not taking sweet photographs, Dave teaches an online course on photography.
        </p> --}}
        <p>
            Your students don't seem to be very engaged in your new course course. It's too passive.
        </p>
        <p>
            You made your videos and gave your students assignments to work on, but you felt like they needed more to be able to <em>really</em>            learn the subject matter.
        </p>
        <p>
            So you set up a Slack group for all of the students to interact and post their assignments to get feedback. Then you started
            getting overwhelmed with the amount of work it was taking to provide good feedback to all of these students.
        </p>
        <p>
            Also, people weren't actually completing the entire course, they would get about halfway through, and then just sort of disappear.
        </p>
        <p>
            So you set up an email system to send out to all of your students to submit their assignments and complete the lessons, and
            you manually create and send reminder emails to get people to submit their assignments.
        </p>
        <p>
            This is better, but now you have to juggle multiple tools and remember when to send out the reminder emails. Since tools
            like Slack and email autoresponders aren't made for this workflow, it's hard for you to keep everything organized.
        </p>
        <p>You also integrate live video calls into your course, and provide feedback on those. So now you have to use another
            tool to set those up and send reminder emails.</p>
        <p>
            You created this course in order to teach others your craft and build a solid, sustainable business for yourself, but you
            can't seem to find the balance between helping your students master the craft and drowning in work because of
            an inefficient workflow.
        </p>
        <h2>You've got a problem, and <em>you are not alone.</em></h2>
        <p>
            If you’re a course creator, this process might sound familiar. <strong>The online course creation workflow is broken.</strong>
        </p>
        <p>
            You spend all this time and effort creating what is a great course, and you get a flurry of people signing up.
        </p>
        <p>
            Their enthusiasm is huge at first. Everyone is posting in the Slack group, asking questions, telling you how much they love
            the course.
        </p>
        <p>
            But somewhere after the first few weeks, engagement begins to go down. You notice people aren’t finishing the course, or
            aren’t doing anything with the information they are learning.
        </p>

        <p>
            They say they’re busy, they aren’t sure how to apply it, they need personalized feedback.
        </p>

        <p>
            You’re excited because you had the opportunity to teach people something that would genuinely improve their lives and help
            them further their career by learning an in-demand skill, but they just don’t seem to be engaged and taking action
            on the content.
        </p>
        <h2>Online courses are in crisis</h2>

        <p>
            The internet gave us this amazing ability to communicate with people from all over the world, regardless of their location
            or the time they choose to watch our content.
        </p>

        <p>
            This passive consumption model allowed anybody to reach an unlimited number of people with their content.
        </p>

        <p class="text-grey font-serif text-3xl mb-6 text-center">
            But something got lost along the way.
        </p>

        <p>
            Amid the obsession with conversion funnels, lead magnets, and upsells, we forgot to ask if our courses are actually making
            a difference in their lives.
        </p>

        <p>
            We forgot to look past the bonuses and the value that people
            <em>felt like</em> they were getting, and make sure our courses were
            <em>actually</em> helping them grow their careers or master a new skill.
        </p>

        <p>
            We forgot that the path to a successful course, for both our students and ourselves, is actually teaching:
        </p>

        <ul class="fa-ul mb-6 ml-5">
            <li class="flex items-center mb-3">
                <span class="fa-li"><i class="fas fa-bolt text-indigo-dark"></i></span>
                <p class="mb-0 pl-2">Providing feedback</p>
            </li>
            <li class="flex items-center mb-3">
                <span class="fa-li"><i class="fas fa-bolt text-indigo-dark"></i></span>
                <p class="mb-0 pl-2">Helping them overcome challenges</p>
            </li>
            <li class="flex items-center mb-3">
                <span class="fa-li"><i class="fas fa-bolt text-indigo-dark"></i></span>
                <p class="mb-0 pl-2">Fostering a community</p>
            </li>
            <li class="flex items-center mb-3">
                <span class="fa-li"><i class="fas fa-bolt text-indigo-dark"></i></span>
                <p class="mb-0 pl-2">Keeping people accountable</p>
            </li>
        </ul>

        <p>
            As great as online learning is, there is something to be said for being taught something in person, with a group of your
            peers, and then applying that knowledge to a real-world project, getting personalized feedback and making adjustments
            along the way.
        </p>

        <p>
            When people learn from an online course, and then immediately apply that knowledge to a real-world project that they can
            take away to use on their portfolio or resume, it makes a huge impact.
        </p>

        <p>
            <strong>
            But that is difficult to accomplish with a passive, video-based course alone.
          </strong>
        </p>

        <p>
            Let’s look at how the online learning process happens for most students. This is likely that path that many of your students
            are taking, and if you’ve taken any online courses in the past, this process might be familiar to you as well:
        </p>
    </section>
    <section class="mx-auto max-w-xl">
        <div class="flex px-4 py-10 items-center shadow-md rounded mb-10">
            <img src="images/programmer.svg" alt="Programmer working at computers" class="w-1/4" />
            <div class="flex px-8 -mr-8">
                <div class="flex-column">
                    <p class="text-2xl">
                        First, you sign up for the course, super excited and motivated to dive in.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex px-4 py-10 items-center shadow-md rounded mb-10">
            <img src="images/wireframe.svg" alt="Programmer working at computers" class="w-1/4" />
            <div class="flex px-8 -mr-8">
                <div class="flex-column">
                    <p class="text-2xl">
                        Next, you start following along with the sample project, feeling great about how much you're learning. Maybe you even finish
                        the course.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex px-4 py-10 items-center shadow-md rounded mb-10">
            <img src="images/blank.svg" alt="Artist staring at blank canvas" class="w-1/4" />
            <div class="flex px-8 -mr-8">
                <div class="flex-column">
                    <p class="text-2xl">
                        Then, after the course is over, you immediately forget everything you learned and can't apply it to real-world work.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex px-4 py-10 items-center shadow-md rounded mb-10">
            <img src="images/timeline.svg" alt="Man staring at different screens" class="w-1/4" />
            <div class="flex px-8 -mr-8">
                <div class="flex-column">
                    <p class="text-2xl">
                        Finally, you rinse and repeat the same cycle, over and over again, with different courses.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-md mx-auto px-5">
        <p>
            Current online course platforms are fantastic at delivering the actual content, but an efficient system for organizing and
            executing an effective assignment/feedback loop is missing.
        </p>

        <p>
            As instructors, it’s our job to make sure that our students get real value from our course by applying the knowledge they
            gain to their careers.
        </p>

        <p>So, smart course creators noticed this, and started using existing tools to create this type of workflow and learning.
            Good teachers know that in order for their students to effectively learn, they need to be applying the lessons
            to real-world projects, and then getting personalized, actionable feedback on those assignments.</p>

        <p>
            But this process is difficult and time-consuming to execute. Having to combine different tools like Slack, Typeform, Zoom,
            and email gets the job done, but it is a significant time-suck on the part of the instructore trying to keep
            it all cohesive and organized, when that time would be better spend teaching.
        </p>

        <p>It's also difficult for the students, as they have to interact and bounce back and forth between several tools while
            trying to learn a new skill.</p>

        <h2>There is a better way to teach online</h2>

        <p class="mb-8">
            In order to learn a complicated, high-value, career-changing skill effectively, we need a few things:
        </p>
    </section>
    <section class="mx-auto max-w-xl">
        <section class="flex flex-wrap -mx-4 mb-4">
            <div class="w-1/2 px-4 pb-8">
                <div class="bg-indigo-lightest p-2 rounded-full w-8 h-8 flex justify-center items-center ">
                    <i class="fa fa-book text-indigo-dark bg-indigo-lightest rounded-full"></i>
                </div>

                <h3 class="text-2xl mb-0">Deliberate Practice</h3>
                <p class="mb-0">
                    We need to be able to incrementally push our comfort zone further and further by starting at the beginning and practicing
                    things that are slightly above our skill level in an organized, linear way.
                </p>
            </div>
            <div class="w-1/2 px-4 pb-8">
                <div class="bg-indigo-lightest p-2 rounded-full w-8 h-8 flex justify-center items-center ">
                    <i class="fa fa-comments text-indigo-dark bg-indigo-lightest rounded-full"></i>
                </div>
                <h3 class="text-2xl mb-0">Specific Feedback</h3>
                <p class="mb-0">
                    By incrementally pushing our comfort zone, we will make mistakes. Specific feedback from someone more experienced than ourselves
                    is necessary to learn from these mistakes and increase our skill level.
                </p>
            </div>
            <div class="w-1/2 px-4 pb-8">
                <div class="bg-indigo-lightest p-2 rounded-full w-8 h-8 flex justify-center items-center ">
                    <i class="fa fa-bullseye text-indigo-dark bg-indigo-lightest rounded-full"></i>
                </div>
                <h3 class="text-2xl mb-0">Relevance</h3>
                <p class="mb-0">
                    When we apply what we are learning to a real-world project that we are invested in, the knowledge stays in our head much
                    better than if we simply followed along with a pre-determined sample project.
                </p>
            </div>
            <div class="w-1/2 px-4 pb-8">
                <div class="bg-indigo-lightest p-2 rounded-full w-8 h-8 flex justify-center items-center ">
                    <i class="fa fa-lock text-indigo-dark bg-indigo-lightest rounded-full"></i>
                </div>
                <h3 class="text-2xl mb-0">Accountability</h3>
                <p class="mb-0">
                    Passively consumed courses are easy to stop taking. By staying accountable to someone else to complete things on time and
                    make consistent progress, we increase our chances of completing a course.
                </p>
            </div>
        </section>
    </section>
    <section class="max-w-md mx-auto px-5">
        <p>
            As an online course creator, you’ve probably learned a lot of this already through teaching your courses, but, due to the
            problems discussed above, actually implementing it effectively is really hard.
        </p>

        <h2>Why existing tools aren't ideal</h2>

        <p>
            The main problem with doing it this way is that none of these tools like Slack, Zoom, Drip, or Typeform were explicitly designed
            to work in tandem with the others as part of a singular process.
        </p>

        <p>
            They were all built to be standalone services for their own purposes. They’re great at that, but the cracks start to show
            when trying to combine them all and use them together.
        </p>

        <p>
            That means that there are little inefficiencies that need to be worked around, and students and teachers are constantly jumping
            back and forth between different tools.
        </p>

        <p>
            If you’ve committed to giving each student specific feedback and you have a lot of students in your course, it can be downright
            impossible to keep up with.
        </p>

        <p>
            As it stands, it’s the best option available, but it’s a pain to set up and an even bigger pain to maintain and keep up with.
        </p>

        <p>
            If every stage of this process was part of the same tool and workflow designed to make it as effective as possible, the experience
            would be much better for both students and instructors, leading to better learning for the students, and more
            successful courses for the instructor.
        </p>

        <h2>A better solution</h2>

        <p>
            Cognition is designed to make integrating assignments, feedback, and live interaction into your online course seamless, efficient,
            and enjoyable..
        </p>
        <p>
            It works by taking all of the concepts we discussed above and merging them into one cohesive platform with features designed
            to facilitate an effective feedback loop on the part of both instructor and student.
        </p>
        <p class="text-grey font-serif text-3xl text-center">Here's the process in a nutshell:</p>
        <section class="mb-20">
            <div class="pb-16">
                <h2 class="my-0 text-indigo font-sans">Step 1</h2>
                <h3 class="mb-4">Enroll Your Students</h3>
                <p>Enroll students individually or all at once using the email import tool. Cognition will then atuomatically
                    send out a unique registration email to each student to set up their account. You can create as many
                    different courses and cohorts as you want, so if you have multiple cohorts of students going through
                    the course on different schedules, you can separate them out.</p>
                <img class="rounded shadow-md" src="images/screenshot.png" alt="Placeholder" />
            </div>
            <div class="pb-16">
                <h2 class="my-0 text-indigo font-sans">Step 2</h2>
                <h3 class="mb-4">Set Up Your Course Schedule</h3>
                <p>
                    Choose the required deadlines for assignments and set up when you'll be conducting live calls. Then choose when you want
                    to automatically send reminders to students to submit assignments and about the time and date of the
                    live call.
                </p>
                <p>Would you rather have your students go through the course at their own pace, and give feedback individually
                    as it is submitted to you? <a href="#ondemand" class="text-indigo no-underline border-b-4 border-indigo hover:text-indigo-lighter hover:border-indigo-lighter transition-fast">Make your course an on demand course</a>.</p>
                <img class="rounded shadow-md" src="images/screenshot.png" alt="Placeholder" />
            </div>
            <div class="pb-16">
                <h2 class="my-0 text-indigo font-sans">Step 3</h2>
                <h3 class="mb-4">Student Submits Assignment</h3>
                <p>
                    Use the form builder to construct exactly how students should submit their assignments. Then you can either link them to
                    that form, or embed it inside the lesson of your online teaching platform. Students watch the lesson,
                    and then submit their assignments to you using the form you built.
                </p>
                <img class="rounded shadow-md" src="images/screenshot.png" alt="Placeholder" />
            </div>
            <div class="pb-16">
                <h2 class="my-0 text-indigo font-sans">Step 4</h2>
                <h3 class="mb-4">Conduct a Live Call</h3>
                <p>
                    When the student submits their assignment, it will be automatically added to the feedback queue in the order it was received
                    for you to review. When it's time to deliver the live call, the queue will be displayed in the interface,
                    and you can timestamp each feedback item, so that students can jump directly to their feedback when they
                    watch the recording.
                </p>
                <img class="rounded shadow-md" src="images/screenshot.png" alt="Placeholder" />
            </div>
            <div>
                <h2 class="my-0 text-indigo font-sans">Step 5</h2>
                <h3 class="mb-4">Recording Delivered</h3>
                <p>
                    The recording with feedback timestamps is automatically delivered to each student enrolled in the course after the call ends.
                    Students can then implement the provided feedback before starting work on the next assignment.
                </p>
                <img class="rounded shadow-md" src="images/screenshot.png" alt="Placeholder" />
            </div>
        </section>
        <section class="my-20" id="ondemand">
            <h2>On Demand Courses</h2>
            <p>If you don't want to schedule out your course with different cohorts and scheduled live video calls, you can
                make your course on demand.</p>
            <p>This option is best for people whose course is delivered passively, with students being able to take it at their
                own pace.</p>
            <p>You will receive a notification whenever a student submits a new assignment, and can go directly to their assignment
                to leave feedback in text or video form.</p>
            <p>The student will then get notified that you've given feedback and can implement it and move on to the next lesson.</p>
            <p>This workflow allows students to take the course on their own schedule, while still utilizing a feedback loop
                that facilitates effective learning.</p>
        </section>
        <section class="my-20 text-center">
            <p class="text-xl">
                Cognition is currently in the early stages of design and development. If you’re interested in using it to help improve your
                online courses, sign up to receive updates on the progress and opportunities for beta testing (and associated
                discounts).
            </p>
            <a href="#signup" class="button hover:bg-blue-lighter transition-fast transition-property-bg">
            Sign Up
          </a>
        </section>
        <section class="my-20">
            <h2>Who's behind this?</h2>
            <img class="rotate-left max-w-md m-auto block mb-20 border-white border-8 rounded shadow-md" src="images/family.jpg" alt="Ken Rogers"
            />
            <p>
                My name is Ken Rogers. That's my wife Chelsea and son Joe with me.
            </p>
            <p>
                I’m a designer and developer on a mission to improve online education.
            </p>
            <p>
                As someone who has both taken and created multiple courses, I know how frustrating the current online course process can
                be, and I think there’s a better way.
            </p>
            <p>
                I dropped out of college early and started taking online courses to kickstart my career in web development.
            </p>
            <p>
                I have come to greatly appreciate the value of being able to learn something online, for far cheaper than a university, while
                learning specific content that can directly improve my career.
            </p>
            <p>
                But along the way, I noticed that it's very hard to truly learn from an online course without an effective system for applying
                the knowledge to a real world project, and then getting feedback on that work from the instructor.
            </p>
            <p>
                I think the process could be made far better and more effective for both students and instructors.
            </p>
            <p>That’s why I’m building Cognition.</p>
        </section>
    </section>
    <section class="bg-indigo-darkest w-full py-32" id="signup">
        <div class="md:w-1/2 mx-auto">
            <p class="text-indigo-lightest text-xl">
                Cognition is still in the very early stages of ideation and development, and I’m looking for frustrated course creators that
                want a better way to teach online to help me flesh out the product and beta test it.</p>
            <p class="text-indigo-lightest text-xl">If that’s you, enter your email below and I’ll be in touch soon (the real me, not an autoresponder) about what’s
                next, how you can help, and what’s in it for you.
            </p>
            <form action="https://kenrogers.us14.list-manage.com/subscribe/post?u=93c5030a0f37ecd85d7a9d3d7&amp;id=c19b7d6e7a" method="post"
                id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate flex" target="_blank" novalidate>

                <input type="email" value="" name="EMAIL" class="required email rounded rounded-r-none shadow-md w-full py-4 px-6 text-grey-darker focus:outline-none bg-indigo-lightest"
                    id="mce-EMAIL">
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -50000px;" aria-hidden="true"><input type="text" name="b_93c5030a0f37ecd85d7a9d3d7_c19b7d6e7a" tabindex="-1" value=""></div>
                <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="bg-indigo hover:bg-indigo-light transition-fast transition-propery-bg text-white uppercase tracking-wide px-8 py-4 rounded rounded-l-none no-underline text-sm shadow-md font-semibold w-1/3">
            </form>
        </div>
    </section>
</div>
@endsection