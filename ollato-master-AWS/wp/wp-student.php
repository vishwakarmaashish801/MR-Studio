<?php
session_start();

 if(!isset($_SESSION['loggedin'])){ //if login in session is not set
     header("Location:/wp/");
}


include 'wp_config.php';
 
$mydate=getdate(date("U"));


// variable defined as
 $user_id = '';
 
$user_id = $_SESSION['user_id'];

// echo "User ID ". $user_id;


    

  $sql1 = "SELECT * FROM result where user_id='$user_id'";
  $result = mysqli_query($link,$sql1);
 
  if (mysqli_num_rows($result) == 1) {

  $row = mysqli_fetch_assoc($result);

   //5  2 
 $retval = mysqli_query($link, $sql1);

  if (!$retval) {
      die('Could not get data:');
  }

  while ($row = mysqli_fetch_array($retval)) {
      $_SESSION['$student_id'] = $row[1];
      $adj1 = $row[3];
      $att2 = $row[4];
      $self3 = $row[5];
      $study4 = $row[6];
      $dep5 = $row[7];
      $anx6 = $row[8];
      $stress7 = $row[9];
      $time8 = $row[10];
      $sleep9 = $row[11];
      $cropping11 = $row[12];
      $examDate = $row[13];
  
     $assestmentDate = date("d-m-Y", strtotime($examDate)); 
     
     $dob= $_SESSION['dob'];
      //  echo"DOB ".$dob;
     $dbDate = date("Y",strtotime($dob));
     
      //   echo"database year ".$dbyear;
            $todayDate = Date('Y');
       //   echo"today year".$todayDate;
         $age = $todayDate - $dbDate;  //year
    
    
    
    
    
    
    
    
      $Domain_value_db = array();
      $Domain_name = array('Job Security', 'Work Environment', 'Work load', 'Work Satisfaction', 'Work-Life Balance', 'Career Opportunities', 'Stress', 'Anxiety', 'Depression', 'Coping Mechanism');

      array_push($Domain_value_db, "$adj1", "$att2", "$self3", "$study4", "$dep5", "$anx6", "$stress7", "$time8", "$sleep9", "$cropping11");
    //   print_r($Domain_value_db);
      echo "<br>";

      $newArray_db = array_combine($Domain_name, $Domain_value_db);
    //   print_r($newArray_db);
      // $_SESSION["array_db"] = $newArray_db;

    
        //   content Management
    
    
    //  <------------ Job Sequrity ----------------->
    
   $description_Job_SecurityH ="Based on your responses, it appears that you enjoy a high degree of job security within your company, meaning that you can reasonably expect to remain employed there for the foreseeable future. Job security refers to the degree of confidence that an employee has in their job being secure from potential layoffs, downsizing, or other factors beyond their control.<br> Having a high level of job security can be immensely beneficial for employees, as it provides them with a sense of stability and peace of mind. They can focus on their job responsibilities without worrying about the possibility of losing their job in the near future. Additionally, employees who feel secure in their jobs are more likely to be loyal and committed to their company's success, which can help foster a positive work culture.<br> Several factors can influence job security, including the financial stability of the company, the employee's performance and contribution, the industry in which the company operates, and the current economic climate. Employers can also provide job security to employees through various policies, such as long-term contracts, severance packages, and other benefits that can mitigate the risk of job loss.<br> Overall, a high level of job security can enhance employees' job satisfaction and commitment to their company, leading to a more positive and productive work environment.<br>";
   
   $description_Job_SecurityA ="Based on your assessment, it appears that you have an average level of job security. This means that your job may be less secure than that of an employee with high job security, but more secure than that of an employee with low job security. While there is no immediate threat of job loss, there may be some uncertainty regarding the long-term security of your position.<br> Several factors can contribute to an average level of job security, such as working for a stable company that is facing some economic challenges or performing adequately but not exceptionally. The industry in which the company operates can also play a role, as some industries may be more susceptible to fluctuations in demand or market conditions that can affect job security.<br> An average level of job security can create some uncertainty and impact job satisfaction and overall stability. However, it can also serve as a motivator for employees to work harder and improve their performance to increase their job security. Employers can also take steps to increase job security for employees, such as offering additional training and development opportunities or providing clear communication about the company's plans for the future.<br> In summary, an average level of job security indicates that your job is relatively stable, but there may be some uncertainty that requires you to remain vigilant and continue performing at a high level to ensure ongoing employment.";

   $description_Job_SecurityL ="Based on your responses, it appears that you have a low level of job security in your company. This means that you may be at a greater risk of losing your job, which can create uncertainty, anxiety, and financial stress for you and your family.<br> There are several factors that can contribute to a low level of job security, such as financial difficulties faced by the company, challenges in the industry, or poor employee performance. This can result in decreased job satisfaction, morale, and commitment to the company, which can have a negative impact on your personal life as well.<br> Employers can take steps to increase job security for employees, such as providing clear communication about the company's plans for the future, offering additional training and development opportunities, and providing competitive benefits and compensation packages. However, in some cases, more drastic measures may be necessary, such as restructuring or downsizing, which can result in job loss for some employees.<br> Overall, a low level of job security can create a challenging and uncertain work environment for employees, which can impact their overall well-being and job satisfaction. If you are facing low job security, it may be helpful to stay informed about the company's plans, focus on improving your performance, and explore other job opportunities that may provide greater stability.";
   
     //  <------------ work Environment  --------------->

      
   $description_Work_EnvironmentH ="Your workplace environment is at a high level, which means that the conditions in your workplace are conducive to a positive and productive work experience. A high level of workplace environment can be characterized by a number of factors that contribute to a positive work experience, such as:<br><br> 1.	A safe and comfortable physical environment, including well-maintained facilities, ergonomic workstations, and adequate lighting and ventilation.<br> 2.	A supportive company culture that prioritizes employee well-being, fosters strong communication and collaboration, and provides opportunities for professional growth and development.<br> 3.	Clear expectations and goals, a clear understanding of your role and responsibilities, and opportunities for feedback and recognition. The presence of work-life balance, flexible work arrangements, paid time off, and parental leave can also contribute to a positive work environment.<br> 4.	Opportunities for employee input and feedback, such as opportunities to provide input on company policies, practices, and decisions. This can help employees feel more engaged and invested in their work.<br><br> Overall, a high level of work environment can contribute to employee satisfaction, productivity, and well-being. It can also help attract and retain top talent, as employees are more likely to stay with companies that prioritize their well-being and provide a positive work experience.";

   $description_Work_EnvironmentA="You are experiencing an average level of work environment in your company, which means that your workplace conditions are neither particularly positive nor negative. Your experience may vary depending on your perception and individual circumstances. Some factors that could contribute to an average level of work environment might include:<br><br> •	Adequate physical environment: The physical workplace may meet basic safety and comfort standards but may lack exceptional design or aesthetic appeal.<br> •	Mixed company culture: While the company may have some values and practices that support employee well-being and a positive work experience, there may also be areas where the culture falls short.<br> •	Adequate opportunities for employee input and feedback: Employees may have some opportunities to provide input and feedback on company policies and practices, but these may not be as extensive or frequent as they would like.<br> •	Opportunities for professional growth and development, but not exceptional: The company may offer some opportunities for professional development, such as training or tuition reimbursement, but these may not be as extensive or well-supported as they could be.<br> •	Some work-life balance policies and benefits, but not exceptional: The company may offer some work-life balance policies and benefits, such as paid time off or flexible work arrangements, but these may not be as generous or well-designed as they could be.<br><br> An average level of work environment may not be particularly inspiring, but it is also not necessarily a negative experience for employees. You can still have a satisfying work experience, but you may need to actively seek out opportunities to improve your work environment or advocate for changes to company policies and practices that you feel could be improved. By doing so, you may be able to contribute to making your workplace a more positive and fulfilling experience for yourself and your colleagues.";

   $description_Work_EnvironmentL ="You're working in a company with a low level of work environment, which means that your workplace conditions are negative and may be impacting your well-being and job satisfaction. This situation can create a stressful and challenging work environment, and have a negative impact on your performance and retention.<br><br> Some factors that could contribute to a low level of work environment are:<br> •	Poor physical environment: The workplace may be unsafe, uncomfortable, and poorly maintained, with inadequate lighting, ventilation, or other facilities.<br> •	Negative company culture: The company may not prioritize your well-being, with little emphasis on development, collaboration, or feedback.<br> •	Limited opportunities for input and feedback: You may have limited opportunities to provide input and feedback on company policies and practices, which can make you feel disempowered and disconnected from your work.<br> •	Limited opportunities for professional growth and development: The company may offer limited opportunities for professional development or career advancement, which can make you feel stuck or frustrated in your current role.<br> •	Little work-life balance policies and benefits: The company may offer limited policies and benefits to support work-life balance, such as inflexible work hours or limited time off, which can create a stressful and unsustainable work environment.<br><br> Overall, a low level of work environment can negatively impact your satisfaction, productivity, and well-being. You may feel undervalued, unsupported, and disengaged, and may be more likely to leave the company in search of a more positive work environment. Employers who are aware of a low level of work environment in their company should take proactive steps to address the issues and create a more positive and supportive work environment for their employees.";


     //  <------------ work overload --------------->


   $description_Work_OverloadH="You are experiencing a high level of work pressure in your company, which means that you are facing a significant amount of work demands that may not be sustainable in the long run. This high level of work pressure can lead to stress, burnout, and a negative impact on your performance and well-being.<br> Several factors that could contribute to a high level of work pressure include:<br> 1.	High workload: You may have a heavy workload with demanding deadlines and responsibilities that can be challenging to manage.<br> 2.	Limited resources: You may have limited resources or support to complete your work effectively, such as inadequate staffing, outdated equipment, or limited access to information or tools.<br> 3.	Inadequate training or support: You may not have received adequate training or support to effectively manage your workload or responsibilities, which can create additional stress and uncertainty.<br> 4.	Inflexible work hours: You may be expected to work long or irregular hours, with limited flexibility to manage your work-life balance.<br> 5.	Inefficient work processes: You may be dealing with inefficient or ineffective work processes or communication, which can create additional stress and workload.<br><br> Overall, a high level of work pressure can have a negative impact on your satisfaction, productivity, and well-being. You may feel overwhelmed, exhausted, and may be more likely to experience burnout or mental health issues. Employers who are aware of a high level of work pressure in their company should take proactive steps to address the issues and support their employees, such as providing additional resources, training, or flexible work arrangements. It's essential to create a work environment that is sustainable and supportive of your well-being to foster a positive and productive workplace culture.";
   
   $description_Work_OverloadA="You have an average level of work overload in your company, it means that they are experiencing a moderate amount of work or job demands that they can manage reasonably well. An average level of work overload can be challenging but manageable for you, and may not have a significant impact on your performance or well-being.<br> Some factors that could contribute to an average level of work overload might include:<br> Moderate job demands: you may have a reasonable workload, with manageable deadlines and responsibilities that they can handle effectively.<br> Adequate resources: you may have access to sufficient resources or support to complete your work effectively, such as adequate staffing, up-to-date equipment, or sufficient access to information or tools.<br> Adequate training or support: you may have received adequate training or support to effectively manage your workload or responsibilities, which can help them to feel confident and capable in your job.<br> Reasonable work hours: you may be able to manage your work-life balance reasonably well, with regular work hours and the ability to take time off when needed.<br> Effective work processes: you may be working with efficient and effective work processes or communication, which can help to reduce stress and workload.<br> Overall, an average level of work overload can be a manageable challenge for you, and can be conducive to productivity and engagement in the workplace. Employers who are aware of an average level of work overload in your company should still monitor your workload and performance to ensure that they are not being pushed to your limits, and to offer support and resources as needed to maintain a sustainable and positive work environment.";
  
   $description_Work_OverloadL="If you have a low level of work overload in your company, it means that you are not burdened with an excessive or unreasonable amount of work or job demands. This is generally considered a positive thing, as it can help you to feel less stressed, more engaged, and more productive.<br> There are several factors that may contribute to a low level of work overload, including reasonable job demands, sufficient resources and support, adequate training, reasonable work hours, and efficient work processes and communication.<br> Having a manageable workload with reasonable deadlines and responsibilities that you can handle effectively, access to adequate resources or support, and adequate training or support can help you feel confident and capable in your job. In addition, being able to manage your work-life balance effectively, with regular work hours and the ability to take time off when needed, can help reduce stress and workload.<br> Overall, a low level of work overload can be a positive thing for you, as it can help you feel more satisfied and engaged in your work. However, employers should still monitor your workload and performance to ensure that you are being challenged sufficiently, and offer opportunities for growth and development as needed.<br>";

    
    // < ------------ work Satisfaction --------------->

   $description_Work_SatisfactionH="If you have a high level of work satisfaction in your company, it means that you are generally content, enthusiastic, and fulfilled in your job. High levels of work satisfaction are typically considered a positive thing, as they can lead to increased productivity, reduced turnover, and an overall better work environment.<br> Several factors that can contribute to a high level of work satisfaction include:<br> •	Meaningful work: Your job may be fulfilling, significant, and aligned with your personal values or goals.<br> •	Supportive work environment: You may work in an environment that is supportive and respectful, with strong relationships with colleagues and management.<br> •	Opportunities for growth: You may have access to opportunities for learning, development, and career advancement, which can help you to feel challenged and motivated in your work.<br> •	Fair compensation and benefits: You may feel that you are fairly compensated for your work, with competitive salaries and benefits packages.<br> •	Positive work-life balance: You may be able to balance your work and personal life effectively, with flexible schedules or work arrangements.<br> •	Recognition and feedback: You may receive regular recognition and feedback for your work, which can help you to feel valued and supported in your role.<br><br> Overall, a high level of work satisfaction is a positive thing for both employees and employers, as it can lead to greater engagement, commitment, and productivity in the workplace. Employers who are aware of high levels of work satisfaction in their company should strive to maintain a positive work environment and offer opportunities for growth and development, to help ensure that their employees continue to feel challenged and engaged in their work.";
  
   $description_Work_SatisfactionA="If you have an average level of work satisfaction in your company, it means that you have a neutral or moderate view of your job. Some aspects of your job may be fulfilling or enjoyable, while others may not be so satisfying.<br> Factors that could contribute to an average level of work satisfaction might include:<br> Workload and stress levels: You may feel that your workload and stress levels are manageable, but may not be particularly stimulated or interested in your work.<br> Work environment: You may feel that your work environment is satisfactory, but may not feel a strong connection to your colleagues or the company culture.<br> Compensation and benefits: You may feel that your compensation and benefits are adequate, but may not be motivated by the level of compensation or the benefits package.<br> Opportunities for growth: You may have some access to learning and development opportunities, but may not feel particularly challenged or inspired by them.<br> Work-life balance: You may be able to balance your work and personal life reasonably well, but may not be completely satisfied with your work-life balance.<br> Overall, an average level of work satisfaction is not necessarily a negative thing, but it may indicate a lack of engagement or motivation towards your work. Employers who are aware of average levels of work satisfaction in their company should consider ways to increase your motivation and engagement, such as by offering more opportunities for growth and development, increasing recognition and feedback, or providing a more supportive work environment.";
   
   $description_Work_SatisfactionL="If you have a low level of work satisfaction in your company, it means that you are generally unhappy or dissatisfied with your job. This can have serious consequences, such as decreased productivity, increased absenteeism, and higher turnover rates.<br> There are several factors that can contribute to a low level of work satisfaction, including:<br> Job duties: You may not find your job duties interesting, engaging, or fulfilling.<br> Workload and stress levels: You may feel overwhelmed by your workload or may be experiencing high levels of stress on the job.<br> Work environment: You may not feel supported by your colleagues or managers or may feel that the work environment is hostile or unsupportive.<br> Compensation and benefits: You may feel that you are not being fairly compensated for your work or may not have access to adequate benefits or perks.<br> Opportunities for growth: You may feel that there are no opportunities for advancement or learning and development in your current role.<br> Work-life balance: You may feel that you are not able to balance your work and personal life or that your job is negatively affecting your personal life.<br><br> Overall, a low level of work satisfaction is a serious issue for both you and your employer. Employers should take steps to address the underlying causes of low work satisfaction, such as by offering more opportunities for growth and development, improving compensation and benefits, or providing a more supportive work environment. Additionally, employers can offer recognition and feedback, provide opportunities for work-life balance, and actively work to improve communication and collaboration within the workplace. It is important to communicate your concerns with your employer so that they can work towards addressing the issues and improving your overall work satisfaction.";

     // < ------------ work life Balance -------16-05-2023-------->
     
   $description_Work_Life_BalanceH ="You enjoy a high level of work-life balance in your company, meaning that you are able to balance your work responsibilities with your personal life and outside activities effectively. This is a highly positive aspect of your job, as it allows you to maintain your physical and emotional health, cultivate positive relationships with family and friends, and participate in activities that are important to you.<br> Achieving a high level of work-life balance can depend on various factors, including:<br> 1.	Flexible work arrangements: Your employer may offer flexible schedules, telecommuting options, or other arrangements that enable you to better balance your work and personal obligations.<br> 2.	Manageable workload: You may feel that your workload is reasonable and not overly burdensome, giving you enough time to attend to both work and personal needs.<br> 3.	Supportive work culture: The company culture may value work-life balance and encourage you to prioritize your well-being and personal life.<br> 4.	Adequate time off: You may have sufficient time off, such as vacation days, holidays, and sick leave, to take care of personal matters and recharge.<br> 5.	Positive relationships: You may enjoy positive relationships with your colleagues and managers, which can help reduce stress and improve work-life balance.<br><br> Overall, a high level of work-life balance can have a positive impact on both you and the company. When you have good work-life balance, you tend to be more productive, engaged, and motivated in your work, and are less likely to experience burnout or turnover. Employers can help support work-life balance by offering flexible work arrangements, promoting a supportive work culture, and ensuring that you have adequate time off to attend to personal needs.";
   
   $description_Work_Life_BalanceA ="You have an average level of work-life balance in your company, which means that you are able to balance your work responsibilities with your personal life and activities to some extent, but may experience some difficulty or strain in doing so.<br> There are several reasons why you may have an average level of work-life balance, such as a moderate workload that is manageable most of the time, but may sometimes require you to work longer hours or take work home. The Company may offer some flexibility in terms of schedules or working remotely, but it may not be enough to fully accommodate your personal needs or preferences. You may have some time off, but it may not be enough to fully attend to personal needs or obligations. The Company may have a stressful or demanding work environment that makes it difficult for you to balance work and personal life. You may not receive sufficient support from your colleagues or managers to help manage your workload and achieve work-life balance.<br> An average level of work-life balance can be challenging as it may lead to stress, burnout, and reduced job satisfaction. Employers can take steps to improve work-life balance by offering more flexible work arrangements, providing adequate time off, and promoting a supportive and healthy work culture. This can help you feel more supported and motivated in your work and can ultimately benefit both you and the company.<br>";
   
   $description_Work_Life_BalanceL ="You may be experiencing a low level of work-life balance in your company, which can make it challenging to manage the demands of your job with your personal life and commitments outside of work.<br> Some common reasons for a low level of work-life balance include:<br> •	Heavy workload: You may have an overwhelming amount of work to complete within a limited timeframe, resulting in long hours or taking work home.<br> •	Inflexible work arrangements: The Company may have rigid schedules or may not offer options for remote work, making it difficult for you to balance personal obligations and commitments.<br> •	Limited time off: You may have limited vacation time or personal days, making it challenging to take time off for personal needs or family obligations.<br> •	Stressful work environment: The Company may have a highly stressful or demanding work environment, making it challenging to achieve work-life balance.<br> •	Lack of support: You may not receive adequate support from your colleagues or managers to help manage your workload and achieve work-life balance.<br><br> A low level of work-life balance can negatively impact your overall well-being, leading to stress, burnout, and decreased job satisfaction. It's important for employers to take steps to improve work-life balance, such as providing flexible work arrangements, adequate time off, and promoting a supportive work culture. By doing so, employers can increase productivity, motivation, and retention of their employees, benefiting both employees and the company as a whole.";
   
   // < ------------ careere opportunities --------------->

   $description_Career_OpportunitiesH = "You have significant career growth opportunities in your company, which means that there are ample chances for you to progress in your career and take on new, challenging roles within the organization.<br> There are various factors that contribute to a high level of career opportunities, such as:<br> Clear and defined career paths: The company may have well-established career paths that provide you with a clear understanding of the skills, experience, and qualifications required to advance in your career.<br> Training and development programs: The company may offer comprehensive training and development programs that equip you with the necessary skills and knowledge to advance in your career.<br> Promotions and growth opportunities: The company may regularly promote employees or offer opportunities for growth and development within the organization, enabling you to take on new roles and responsibilities.<br> Succession planning: The company may have a formal succession planning process in place that identifies and prepares potential future leaders for senior positions.<br> Supportive culture: The company may foster a culture that encourages and supports career development, providing you with the resources and guidance necessary to achieve your career goals.<br> Having a high level of career opportunities can be motivating and help you feel valued and engaged in your work. It can also benefit the company by retaining talented employees and ensuring a robust pipeline of future leaders.";
   
   $description_Career_OpportunitiesA = "If you have an average level of career opportunities in your company, it means that you have some opportunities for career advancement, but they may be limited or not clearly defined. Some factors that can contribute to an average level of career opportunities include:<br> •	Limited job openings: Your company may have limited job openings or a relatively flat organizational structure, making it challenging for you to move up the ladder.<br> •	Unclear career paths: Your company may not have clearly defined career paths, making it difficult for you to understand the steps you need to take to advance in your career.<br> •	Inadequate training and development: Your company may not offer sufficient training and development opportunities to help you acquire the skills and knowledge you need to take on more advanced roles.<br> •	Limited promotions and growth opportunities: Your company may not promote you or offer opportunities for growth and development as frequently as you would like.<br> •	Insufficient succession planning: Your company may not have a formal succession planning process in place, making it unclear who will take on leadership roles in the future.<br><br> An average level of career opportunities can still provide you with some potential for growth and development, but it may not be as robust or as clearly defined as you would prefer. Companies with an average level of career opportunities may need to focus on providing additional support and resources to help you advance in your career, such as offering more training and development programs, creating more opportunities for promotion, or establishing clear career paths. By doing so, they can help you feel more valued and engaged in your work, and ultimately benefit the company by retaining talented employees and fostering a culture of growth and development.";
   
   $description_Career_OpportunitiesL = "If you have a low level of career opportunities in your company, it means that there are few chances for career advancement or professional growth within the organization. The following factors may contribute to a low level of career opportunities:<br> 1.	Limited job openings: The company may have a small number of job openings or a flat organizational structure, making it difficult for you to progress.<br> 2.	Inadequate training and development: The company may not offer sufficient training and development opportunities to help you acquire the skills and knowledge needed to take on more advanced roles.<br> 3.	Unclear career paths: The company may not have clearly defined career paths, making it difficult for you to understand how to advance in your career.<br> 4.	Lack of promotions and growth opportunities: The company may not promote or offer opportunities for growth and development as frequently as you would like.<br> 5.	Poor management and leadership: The company may have poor management or leadership that does not prioritize career development or provide adequate support and resources to you.<br><br> A low level of career opportunities can be demotivating, leaving you feeling stuck in your current role with limited prospects for advancement. This can lead to reduced motivation, job satisfaction, and ultimately, increased turnover.<br> Companies with a low level of career opportunities may need to focus on providing additional support and resources to help you advance in your careers. This could include offering more training and development programs, creating more opportunities for promotion, establishing clear career paths, or improving management and leadership. By prioritizing career development, companies can retain employees and create a more engaged and motivated workforce.";

    // < ------------ Stress --------------->
    
   $description_StressH ="If you are experiencing a high level of stress in your company, it means that you are under significant pressure in your work environment. This can be caused by several factors, including:<br> •	Heavy workload: You may have too much work to do, with tight deadlines, which makes it challenging to manage your time effectively and stay on top of your tasks.<br> •	High demands: You may be facing high demands from clients, customers, or management, which can increase your stress levels and create a sense of pressure.<br> •	Conflict with colleagues: You may be experiencing conflict or tension with colleagues, which can lead to a stressful work environment.<br> •	Uncertainty and instability: You may be facing uncertainty and instability in your job, such as the possibility of layoffs or a lack of job security.<br> •	Poor work-life balance: You may be struggling to balance your work responsibilities with your personal life, which can create additional stress and anxiety.<br> High levels of stress can have negative effects on your mental and physical health, as well as your job performance and overall job satisfaction. It can lead to burnout, decreased motivation, and increased absenteeism or turnover.<br><br> Employers can help address high levels of stress in the workplace by creating a supportive and positive work environment, offering resources and support for managing stress, and promoting work-life balance. This can include providing you with opportunities for relaxation, exercise, and other stress-reducing activities, as well as offering flexible work schedules or other accommodations to help you manage your stress levels. By prioritizing your well-being and reducing stress in the workplace, employers can help create a more positive and productive work environment.";
   
   $description_StressA = "You have an average level of stress in your company, which may indicate that you experience some level of stress and anxiety at work, but are generally able to manage your workload and responsibilities in a manageable and reasonable manner. You may be able to prioritize tasks effectively and take regular breaks, but may also feel that you have limited control over your workload and schedule.<br> However, it is important to note that even an average level of stress can have negative effects on your mental and physical health, as well as your job performance and overall job satisfaction. It is essential for employers to provide resources and support for managing stress, such as counselling services or stress management programs, to help you cope with workplace stressors effectively.<br> Employers can also promote a positive work environment and encourage open communication to address stress-related concerns. This can include providing opportunities for feedback and collaboration, as well as promoting work-life balance through flexible schedules or remote work options. By prioritizing your well-being and providing support for managing stress, employers can help create a more productive and positive work environment for you.";
  
   $description_StressL ="If you've reported a low level of stress in your company, it suggests that you find your work responsibilities manageable and are able to handle your workload and prioritize tasks effectively. You may feel that the demands of your job are reasonable and that you have control over your workload and schedule. By taking regular breaks and avoiding excessive overtime, you're able to maintain a healthy work-life balance, which can help reduce stress levels.<br> Moreover, you may feel supported by your colleagues and superiors in managing work-related stress. You may have access to resources and support for managing stress, such as counselling services or stress management programs. You may also feel comfortable communicating your stress and workload concerns with your employer or colleagues, and receive a responsive and supportive response when you do so.<br> Overall, having a low level of stress indicates a positive work environment, where the demands of the job are reasonable, and employees are supported in managing their workload and stress levels. This can lead to increased job satisfaction, improved mental and physical health, and better performance and productivity at work.";
   
   // < ------------ Anxiety --------------->
   
   $description_AnxietyH ="You have a high level of anxiety in your company, it means that you are experiencing excessive worry, fear, and apprehension related to your work. This can have a negative impact on your overall well-being, job performance, and quality of life.<br> Anxiety in the workplace can be caused by a variety of factors, such as high workload, job insecurity, and poor communication with colleagues or supervisors, lack of support, unrealistic expectations, or difficult relationships with co-workers.<br> When you experience high levels of anxiety at work, it can affect your ability to concentrate, make decisions, and perform your job responsibilities effectively. It can also lead to physical symptoms such as headaches, stomach-aches, and fatigue.<br> Employers have a responsibility to create a supportive work environment that promotes good mental health and well-being. This includes providing you with resources such as counselling services, stress management programs, and flexible work arrangements. Additionally, managers can work to improve communication, set realistic goals, and provide feedback and support to help you manage your anxiety and improve your job performance.";
   
   $description_AnxietyA ="If you have reported an average level of anxiety in your workplace, it suggests that you experience some anxiety or worry related to your job or work environment, but it does not significantly affect your performance or overall well-being. While you may face job demands, interpersonal conflicts, or a lack of control over your work environment, you are generally able to manage your anxiety effectively and maintain a productive work life.<br> However, it's important to recognize that even an average level of anxiety can have negative effects on your mental and physical health, job satisfaction, and performance over time. Therefore, it's crucial to address any underlying causes of anxiety and manage stress levels proactively. This can involve seeking support from colleagues or supervisors, practicing relaxation techniques or mindfulness, setting realistic goals and boundaries, or seeking professional help if necessary.<br> By prioritizing your well-being and addressing any sources of anxiety, you can maintain a healthy and positive work environment that supports your productivity and overall job satisfaction.";
   
   $description_AnxietyL ="You've reported a low level of anxiety in your workplace, which indicates that you are generally able to handle the challenges and demands of your job without experiencing excessive worry or nervousness. You may feel more confident and in control of your work, and have a positive attitude towards your job and colleagues. You may also have developed effective coping mechanisms and strategies to deal with stressors and anxiety triggers in the workplace.<br> Having a low level of anxiety can lead to a more positive and productive work experience, as it allows you to focus on your work and perform at your best. It can also contribute to better mental and physical health, as high levels of anxiety can have negative effects on both.<br> It is important to note, however, that even with a low level of anxiety, it is still important to prioritize your well-being and take steps to manage stress in the workplace. This can include seeking out support from colleagues or professionals if needed, taking breaks when necessary, and practicing self-care techniques such as exercise and mindfulness. By prioritizing your mental health, you can continue to thrive in your job and contribute to a positive work environment.";
   
   
   // < ------------ Depression--------------->
   
   $description_DepressionH ="Based on your response, it appears that you have reported a high level of depression in your company. This indicates that you may be experiencing a range of symptoms that are impacting your overall well-being and functioning.<br> Symptoms such as feeling sad or hopeless about life or work, experiencing decreased pleasure or interest in activities, and having decreased energy or motivation can all impact your productivity and engagement at work. Additionally, symptoms such as trouble sleeping, excessive sleepiness, feelings of guilt or worthlessness, and difficulty concentrating or making decisions can make it difficult for you to focus on work tasks and meet performance expectations.<br> If you are experiencing significant weight loss or weight gain, physical symptoms such as headaches or stomach aches, or thoughts of death or suicide, these may indicate a more severe form of depression that requires immediate attention and support.<br> Feeling isolated or disconnected from others and having trouble functioning at work or in your personal life can further exacerbate symptoms of depression and impact your ability to perform your job duties effectively.<br> It is important for your employer to take your report of high depression seriously and offer appropriate support and accommodations to help you manage your symptoms and improve your well-being. This may include offering access to mental health resources such as counselling services or therapy, flexible work arrangements, and time off to address your symptoms.";
   
   $description_DepressionA ="You have reported an average level of depression which suggests that you may be experiencing some symptoms of depression but not to the extent that it significantly impacts your daily life or work performance. It is important to note that even a mild level of depression can still have negative effects on your mental health and overall well-being. You may experience feelings of sadness or hopelessness, decreased energy or motivation, and difficulty concentrating or making decisions, which can affect your productivity and job satisfaction. Additionally, feeling guilty, worthless, or helpless can impact your self-esteem and personal relationships. Physical symptoms such as headaches or stomach aches may also be present, which can impact your ability to work efficiently. It is important to address these symptoms and seek support to manage your depression effectively. Your employer can offer support and resources to help you manage your symptoms and improve your mental health. This may include access to mental health services, employee assistance programs, and promoting a positive and supportive work environment. Seeking help and support can lead to improved well-being and better job performance.";
   
   $description_DepressionL ="If you have a low level of depression, it indicates that you are generally able to manage your emotions well and have a positive outlook on life and work. You may find pleasure and interest in activities, have consistent energy and motivation levels, sleep well, and not experience guilt, worthlessness, or helplessness. Your ability to make decisions easily and focus well on tasks can enhance your work performance and job satisfaction. Additionally, not experiencing physical symptoms due to depression, thoughts of death or suicide, and feeling connected to others, can contribute to your overall well-being and happiness.<br> However, it's important to note that having a low level of depression doesn't necessarily mean that you are immune to negative emotions or stress. It's essential to regularly check in with yourself and seek support if needed to maintain your well-being. Employers can also help by promoting a positive and supportive work environment and offering resources and support for employees' mental health.<br>";
   
   // < ------------ Coping Machanisam --------------->
   
   $description_Coping_MechanismH ="Your responses suggest that you have developed a high level of coping mechanisms, indicating that you have the ability to manage stressors and challenges in your work environment effectively. Coping mechanisms refer to various strategies and techniques that individuals use to handle stress and adversity, and having a high level of coping mechanisms indicates that you are able to handle work-related stressors in a healthy and productive manner. This can lead to better job performance, job satisfaction, and overall well-being.<br> Effective coping mechanisms may include exercise, relaxation techniques, social support, problem-solving, and cognitive reframing, among others. By developing and using these coping mechanisms, you may be better equipped to handle challenging situations and maintain a positive attitude even in the face of adversity. It is important to continue practicing and refining these coping strategies, as well as seeking additional support or resources if needed, to ensure that you can continue to manage stressors and challenges in a healthy way.";
   
   $description_Coping_MechanismA ="If you have an average level of coping mechanism in your workplace, it means that you have moderate abilities to handle stress and adapt to challenging situations. While you may have developed some coping strategies, you may not be consistently effective in all situations.<br> You may be able to manage stressors to some extent but may still struggle with particularly difficult or unexpected situations. You may also have areas where you need to improve your coping mechanisms, such as time management, communication, or problem-solving skills.<br><br> Overall, an average level of coping mechanism suggests that you are capable of handling the demands of your job to a certain extent, but may benefit from additional support or training to further develop your coping skills. This can include seeking out resources and guidance from colleagues or supervisors, as well as developing a self-care plan to better manage stressors outside of work.<br> Based on the assessment, it appears that you may benefit from additional coping mechanisms in your workplace, as you have a low level of coping abilities. Coping mechanisms refer to the strategies and techniques that individuals use to manage stress and adversity in their lives.";
   
   $description_Coping_MechanismL ="Having a low level of coping mechanisms can make it challenging for you to effectively handle work-related stressors and challenges, which can negatively impact your productivity, job satisfaction, and overall well-being. It may manifest in avoiding tasks, feeling overwhelmed, having trouble prioritizing, and experiencing physical and emotional symptoms related to stress and anxiety.<br> To support you, your employer can offer resources such as counselling, stress management training, and flexible work arrangements. Additionally, promoting a culture of open communication, self-care, and work-life balance can also help to improve your coping mechanisms and mental health. It's essential to identify and work on coping strategies that work best for you to effectively manage stress and improve your work and personal life.";






      
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/print.css" rel="stylesheet" type="text/css">  <!-- Current directory -->
    <title><?php echo $_SESSION['user'];?> - Working Professional Report</title>
   <!-- jquery cdn link -->
    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <!-- jquery another  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <!--bootstrap css cdn link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
body{ font-family: "Times New Roman";font-size:14px;}
.col-md-12{ font-size: 12px;font-family: 'Times New Roman',Times;}
.col-md-4 {width: 32%;}
.btn-pdf,.btn-home { background: #56cce1; color: #11486d; width: 150px;}
</style>
</head>

<body>
        <!-- HTML content for PDF creation -->
        <!--button-->
          <div class="container gap-2 text-center" style="margin-right:-180px">
              <div><button type="button"  style="background:#56cce1;color:#11486d" class="rounded-pill btn-pdf" onClick="window.print()"> Download Report!</button> </div>
              <div><a href="dashboard.php"><button type="button"  style="background:#56cce1;color:#11486d" class="rounded-pill btn-home"> Home</button></a></div>
          </div>

         <!-- Header section -->
         <div class="container page-header ">
         <div class="header-box d-flex col-md-8 justify-content-between  fw-bold">
          <div class="header-title">
            <p class="text-dark ">Ollato’s Mind Scope Assessment Report</p>
            <p class="text-dark sub-title">(Especially designed for working professionals)</p>
          </div>
          <div class="header-page">
            <p class="text-dark  title"></p>
          </div>
        </div>
    <!-- End Header -->
        </div>

         <!-- footer section -->
         <div class="container page-footer p-2">
         <!-- Footer section  -->
         <div class="footer-box d-flex col-md-8 justify-content-between fw-bold">
         <div class="footer-left">
         <p class="text-dark">www.ollato.com</p>
         </div>
         <div class="footer-middle">
           <img src="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png" width='80px'>
         </div>
        <div class="footer-right">
        <span class="text-dark footer-title align-middle">info@ollato.com</span>
        </div>
        </div>
        <!-- End Footer -->
       </div>
     
        <!--main content container start-->
         <div class="container col-md-8">
          
         <!--start first--->
          <div class="page container ">
          <div class="page-body">
        <div class=""style="margin-top:100px">
            <p class="fs-4 fw-bold text-center">Ollato’s Mind Scope Assessment Report </p>
        </div>
    
        <!-- table -->
        <div class="border border-2 container w-75 mt-5">
            <table class="table table-borderless">
               <tr><th>Name:</th><td><?php echo   $_SESSION['user'];?></td></tr>
               <tr><th>Age:</th><td><?php echo $age;?> Years</td></tr>
               <tr><th>Gender:</th><td class="text-capitalize"><?php echo $_SESSION['gender'] ;?></td></tr>
               <!--<tr><th>Profession: </th><td>12<sup>th</sup>std</td></tr>-->
               <tr><th>Date Of Assessment: </th><td><?php echo $assestmentDate ?></span></td></tr>
            </table>
           </div> 
           <!-- end table -->
    
           <!-- Company logo -->
           <div class="text-center" style="margin-top:100px">
            <img src="https://www.ollato.com/wp-content/uploads/2023/02/cropped-ollato-new-logo-site-identi-180x180.png"  class="lobo-company">
           </div>
    
           <div class="com-details container text-center fw-bold">
            <p class="mt-3 ">Ollato</p>
            <p>M/S Serac Education Pvt. Ltd.</p>
            <p>618, Nirmal Corporate Centre, LBS Road, Mulund West, Mumbai – 400080 </p>
            <p>Contact: 9967153285 Email: info@ollato.com / info@seracedu.com        </p>
            <p>Website: www.ollato.com</p>
            
          </div>
          </div> 
          <!--page body-->
        </div>

          <!--second Page--->
          <div class="page container">
          <div class="page-body">
           <div class="fw-bold">&nbsp</div>
          <h4 class="mx-2 mt-3 text-start fw-bold print_att">Dear sir/madam,</h4>
          <div class="col-md-11 p-2">
          <p  style="text-align:justify;">Congratulations on choosing Ollato as your partner in your journey towards
            achieving optimal mental well-being. Our mind is a complex and vital part of our body
            that responds to our surroundings and influences our daily life. To attain peak
            performance, it's crucial to prioritize our mental health. The Ollato team has made
            significant strides in this area by collaborating with over 200 internal and external
            experts, including psychologists, psychiatrists, educators, and other professionals,
            and partnering with renowned universities to develop innovative programs that
            assess and enhance mental well-being. Ollato's flagship program, the One Mind
            program, caters to students, professionals, police and military personnel, technical
            and banking professionals, corporate professionals and other members of society. We
            would be delighted to welcome you to Ollato family and support you on your mental
            wellness journey.
            We have developed a comprehensive mental health care pathway for students that
            encompasses various domains critical to their well-being. The following mental health
            domains have been identified as crucial for the successful management of mental
            health in students:.</p>
            <!--<img src="img\student-domain-img.png" class="mt-5 img-domain">-->
           <p style="text-align:justify;margin-top:25px">The domains listed above play a crucial role in determining the mental health status
            of students. By focusing on each of these areas and working to improve them,
            students can cultivate good mental health and lead fulfilling lives. Our mental health
            care pathway aims to provide students with the necessary resources, guidance, and
            support to navigate these domains effectively and maintain optimal mental wellbeing.</p><br><br>
           <p class="fw-bold"style="text-align:right;margin-right: 45px;"> Best Regards,<br>
            Team Ollato.
            </p>
            <p class="lh-3" style="margin-top:30px;text-align:justify;"><span class="fw-bold ">Note -</span>“Mental Wellbeing encompasses a wide range of factors, including emotional,
            psychological, and social well-being. It impacts our thoughts, feelings, and actions, as
            well as our ability to handle stress, connect with others, and make decisions. At The
            Manthan School, we firmly believe that Mental Wellbeing is vital at every stage of life,
            from childhood and adolescence to adulthood. Mental Wellbeing challenges can affect
            a person's thinking, mood, and behaviour over their lifetime. Therefore, maintaining
            good Mental Wellbeing is essential for overall well-being, and it plays a crucial role in
            a student's ability to succeed in life. By promoting good Mental Wellbeing, students
            can cultivate strong relationships, achieve contentment, and manage stress and
            challenges more effectively.”<br>
            The content of this report is the sole property of Ollato, and all copyrights are
            reserved. Any usage of this report for legal purposes is strictly prohibited, unless
            written permission has been obtained from the company. The primary aim of this
            examination and subsequent report is to encourage students to maintain good mental
            health and stay informed about their mental health status. If there are any disputes
            or conflicts, a formal complaint can be sent to the email address provided below.
            </p>
          </div>
          </div>
         <!--page body-->
          </div>
          <!--end second page-->


            <!--third page welcome page --->
            <div class="page container">
            <div class="page-body" style="text-align:justify;">
            <h3 class=" fw-bold">&nbsp</h3>
            <p class="lh-3 mt-5 "style="text-align: justify;"> Dear<span class="fw-bold"> <?php echo $_SESSION['user'];?></span>,<br><br>
            We are thrilled to welcome you to the world of happiness and endless possibilities for the future!!<br>
            Congratulations on successfully completing the<span class="fs-6 text-bold">“"Ollato Mind Scope Assessment” </span>
            which evaluated multiple key domains of your mental health, particularly during
            your student phase. Our expert panel at Ollato has carefully crafted a
            comprehensive Mind Scope Assessment report, which outlines your mind status
            across each dimension of your life and helps you gain a deeper understanding of
            your potential. Should you have any questions, please do not hesitate to contact
            us. We are excited to embark on this journey of mental health care with you and
            look forward to working together to enhance your well-being. We have thoroughly
            scrutinized and analysed your responses, and we have summarized our findings
            below in tabular and graphical way: -</p>

               <div class="container d-flex gap-3 justify-content-center">
                         
                   

              </div> 
             <!--first table-->
             <div>
               
                   <table class="table-print table-bordered p-2">
                      <thead>
                          <tr>
                            <th scope="col" class="sn p-2"> S.N</th>
                            <th scope="col" class="domain p-2"> Our Domain</th>
                            <th scope="col" class="score p-2">Your Finding</th>
                         </tr>
                      </thead>
                       
                       <tbody>
                            <?php
                            $i=1;
                         foreach ($newArray_db as $key => $value){  ?>
                             
                         <tr>
                              <td class="p-2 text-center"> <?php echo $i ?> </td>
                              <td class="p-2 text-center"> <?php echo $key ?> </td>
                              <td class="p-2 text-center"> <?php echo $value ?></td>
                        </tr>
                     
                    <?php $i++;} ?>
                    
                    </tbody>
                    
                </table>
             </div>
            

            </div>
            </div>
           <!-- end third page-->
          
           <!--fith page-->
           <div class="page container">
            <div class="page-body">
            <div>&nbsp</div>
            <h3 class="text-center fw-bold mt-5 fs-4">DETAILED WORKING PROFESSIONALS ASSESSMENT</h3>
             <p class="mx-auto p-1  w-50" style="background-color: #808080;"></p>
                 
            <div class="mt-5 d-flex justify-content-around">
                
                <div class="indicator  p-2">
                       <h5 class="text-center fw-bold">Indicator - Colour Code</h5>
                    <div class=" red-box"><span class="w-50 fs-6" style="background-color:#7dfd7d">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span class="fs-6 fw-bold text-center">&nbspGood</span></div>
                    <div class=" red-box"><span class="w-50 fs-6" style="background-color:#ffd27f!important">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span class="w-50 fs-6 fw-bold text-center">&nbspBorder Line</span></div>
                    <div class=" red-box"><span class="w-50 bg-danger fs-6" style="background-color:#ff7f7f!important">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><span class="w-50 fs-6 fw-bold text-center">&nbspRisk</span></span></div>
                    
                </div>
                  </div>
               
                  <!-- Graph script -->
                
               <!-- <div class="container graph-box" style="margin-left: -13px;margin-right: 13px;margin-top: 0;margin-bottom: 0;">-->
               <!-- <div class="g1 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 454px;"> </div>-->
               <!-- <div class="g2 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 403px;"> </div>-->
               <!-- <div class="g3 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height: 42px;width: 401px;margin-left: 148px;"></div>-->
               <!-- <div class="g4 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:353px;"></div>-->
               <!-- <div class="g5 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:302px;"></div>-->
               <!-- <div class="g6 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:250px;"></div>-->
               <!-- <div class="g7 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:199px;"></div>-->
               <!-- <div class="g8 border border-2 border-end-0  mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:98px;"></div>-->
               <!-- <div class="g9 border border-2 border-end-0  mb-1" style="margin-top: 350px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:47px;"></div>-->
               <!-- <div class="g10 border border-2 border-end-0 mb-1" style="margin-top: 351px;position: absolute;z-index: 1; rotate: 90deg;height:42px;width: 401px;margin-left:-5px;"></div>-->
               <!--</div>-->
        
                  
                  <div class="container graph-container mt-5"><div id="columnchart_values"></div></div>
                   <!--table domain-->
                 
                  </div> 
            <!--page body--->
            </div>
            <!--end page-->
            
            <!--table description -->
           <div class="page container"> 
            <div class="page-body">
            <p class="lh-3"style="text-align: justify;"> Your assessment report indicates that you possess good coping mechanisms andare capable of handling challenges in your academic and personal life. Your
              responses demonstrate that you are confident in approaching difficult situations,and you seek inspiration and knowledge to improve your coping mechanismsfurther. <br> You are comfortable in both group and individual settings, and you do not shyaway from participating in discussions or tests. You feel confident in approachingyour parents or family members and discussing your mental state with them. You
              have good management techniques and can identify the reasons for yourshortcomings in critical situations.<br>You frequently engage in problem-solving and try to find ways to correct your flaws.You take practice tests and exams to improve your performance, and you can live
              independently without needing a family member or friend to be with you.<br>You frequently engage in problem-solving and try to find ways to correct your flaws.
              You take practice tests and exams to improve your performance, and you can live
              independently without needing a family member or friend to be with you.<br>Overall, your coping mechanisms are well-developed, and you have a positive
              outlook on life. Keep up the good work and continue to seek inspiration and
                knowledge to improve your coping mechanisms further.<br> 
        <p class="fw-bold"style="text-align:right;margin-right: 45px;"> Best Regards,<br>
            Team Ollato.
            </p>
           </div>
           </div>
                 
         <!--Adjustment Doamin -->
         <div class="page container">
     
          <div class="page-body">
          <div class="fw-bold Blank">&nbsp</div>
          <h3 class="my-2 text-center fw-bold">Attention !! </h3>
          <div class="mx-auto">
          <div id="information_adj" class="text-uppercase fs-6 fw-bold my-3"></div>
          <div class="mx-auto d-flex col-md-4">
          <div  id="progressbar_adj" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
          <div  id="indicator_adj"></div>
          </div>
          </div>
          <div id="content_adj" class="container mt-4"></div>
          </div>
          <!--page content end-->

          </div>
         <!--end container adjustment-->
                             
        <!--Attenstion Domain-->
        <div class="page container ">
       
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_att"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div  class="mx-auto d-flex col-md-4">
        <div  id="progressbar_att" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_att">Indicator</div>
        </div>
        </div>
        <div id="content_att" class="mt-4"></div>
        </div>
         <!--end page content attention-->
         <!--end attention container-->
         </div>
                             
         <!--Self Domain-->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_self"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div  class="mx-auto d-flex col-md-4">
        <div  id="progressbar_self" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_self">Indicator</div>
        </div>
        </div>
        <div id="content_self" class="mt-4"></div>
        </div>
        <!--page body-->
        </div>
                 
        <!--Study-->
        <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_study"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div  class="mx-auto d-flex col-md-4">
        <div  id="progressbar_study" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_study">Indicator</div>
        </div>
        </div>
        <div id="content_study" class="mt-4"></div>
        </div>
        <!--page body-->
        </div>
                         
         <!--Depression-->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_dep"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div  id="progressbar_dep" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div  id="indicator_dep">Indicator</div>
        </div>
        </div>
        <div id="content_dep" class="mt-4"></div>
        </div>
        <!--page body-->
         <!--end page content study-->
        </div>

         <!--Anxity-->
         <div class="page container">
        <div class="page-body">       
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_anx"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_anx" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_anx">Indicator</div>
        </div>
        </div>
        <div id="content_anx" class="mt-4"></div>
        </div>
        <!--end page body study-->
        </div>  
                            
         <!--Stress-->
        <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_stress"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_stress" style="border:1px solid #ccc; border-radius: 5px;width:100%"></div>
        <div id="indicator_stress">Indicator</div>
        </div>
        </div>
        <div id="content_stress" class="mt-4"></div>
        </div>
         <!--end page body -->
         </div>

         <!--Time managemnt -->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_time"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_time" style="border:1px solid #ccc; border-radius: 5px;width:100%"></div>
        <div id="indicator_time">Indicator</div>
        </div>
        </div>
        <div id="content_time" class="mt-4"></div>
        </div>
        <!--end page body -->
        </div>

         <!--sleep  -->
          <div class="page container">
        <div class="page-body">      
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_sleep"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_sleep" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_sleep">Indicator</div>
        </div>
        </div>
        <div id="content_sleep" class="mt-4"></div>
        </div>
         <!--end page body -->
        </div>  

        <!--coping  -->
         <div class="page container">
        <div class="page-body">
        <div class="fw-bold Blank">&nbsp</div>
        <div class="mx-auto">
        <!-- Progress information -->
        <div id="information_cop"  class="text-uppercase fs-5 fw-bold my-2 text-center"></div>
        <div class="mx-auto d-flex col-md-4">
        <div id="progressbar_cop" style="border:1px solid #ccc; border-radius:5px;width:100%"></div>
        <div id="indicator_cop">Indicator</div>
        </div>
        </div>
        <div id="content_cop" class="mt-4"></div>
        </div>
        <!--body -->
         </div>
         
         <!--Thanking you-->
         
           <div class="page container">
                <div class="page-body">
                <div class="fw-bold Blank">&nbsp</div>
                <div class="mx-auto">
               <div class="col-md-6 mx-auto thanking">
                    <div class=" text-center mt-5 mb-5" style = "margin:auto;">
                    <div class="">
                     <p class="text-dark thank_title" style="font-weight:800">Thanking You</p>
                     <p class="sub_title">Ollato’s Mind Scope Assessment Report</p>
                      <p class="sub_title">info@ollato.com</p>
                     <p class="sub_title">Website www.ollato.com</p>
                     
                     </div>
                     </div>
                </div>
                <div id="content_cop" class="mt-4"></div>
                </div>
                <!--body -->
                 </div>
         
                           <!--end main container-->
                            </div>
                    
                           <?php
                        
                        foreach ($newArray_db as $key => $value){
                    
                            // echo "Doamain Name" . $key . " Value " . $value."<br>";
                     
                            if($key == "Job Security") {
                    
                                if($value >= 7 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                    
                                   
                    
                                    <?php
                                   $total = $value;
                                     
                                    $color_adj = "#00FF00;opacity: 0.5";
                                    // green
                                    $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Job_SecurityH</div>";
                                    $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%"; 
                                      
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Job Security</div>";
                                        parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                        parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       </script>';
                                   
                                   }
                                }
                                else if($value >= 4 && $value <= 6) {  ?>
                    
                                  <?php
                                   $total = $value;
                                   
                                    $color_adj = "#FFA500; opacity: 0.5";
                                    
                                     $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Job_SecurityA</div>";

                                    // $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> You have scored average in Job security Domain. It means that your job may be less secure than that of an employee with high job security, but more secure than that of you are with low job security. An average level of job security can indicate that there is some level of uncertainty about your job, but there is no immediate threat of job loss.<br> Factors that can contribute to an average level of job security may include your company that is stable but facing some economic challenges, or you are performing adequately but not at an exceptional level. The industry in which the company operates can also play a role in the level of job security, as some industries may be more prone to changes in demand or market conditions that can affect job security.<br> An average level of job security can create some uncertainty for the employee, which can impact job satisfaction and overall sense of stability. However, it can also serve as motivation for the employee to work harder and improve your performance in order to increase your job security. Employers can also take steps to help increase job security for employees, such as offering additional training and development opportunities or providing clear communication about the company's plans for the future.<br> Overall, an average level of job security means that the employee's job is relatively stable, but there is some level of uncertainty that may require the employee to remain vigilant and continue to perform at a high level to ensure your ongoing employment.</div>";

                                    // $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> You have scored average in Job security Domain. It means that your job may be less secure than that of an employee with high job security, but more secure than that of you are with low job security. An average level of job security can indicate that there is some level of uncertainty about your job, but there is no immediate threat of job loss.<br> Factors that can contribute to an average level of job security may include your company that is stable but facing some economic challenges, or you are performing adequately but not at an exceptional level. The industry in which the company operates can also play a role in the level of job security, as some industries may be more prone to changes in demand or market conditions that can affect job security.<br> An average level of job security can create some uncertainty for the employee, which can impact job satisfaction and overall sense of stability. However, it can also serve as motivation for the employee to work harder and improve your performance in order to increase your job security. Employers can also take steps to help increase job security for employees, such as offering additional training and development opportunities or providing clear communication about the company's plans for the future.<br> Overall, an average level of job security means that the employee's job is relatively stable, but there is some level of uncertainty that may require the employee to remain vigilant and continue to perform at a high level to ensure your ongoing employment.</div>";
                                   $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                     
                                        echo '<script>
                                       parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Job Security</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       
                                       </script>';
                                   
                                   }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                   $total = $value;
                                    $color_adj = "#FF0000;opacity:0.5";
                                  
                                    // red
                                   $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Job_SecurityL</div>";

                                    // $content_adj = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a low level of job security in your company, it means that you may be at a greater risk of losing your job. A low level of job security can create uncertainty and anxiety for you, as you may be worried about your job stability and your ability to support themselves and your family.<br> There are several factors that can contribute to a low level of job security. <br>For example, the company may be facing financial difficulties, such as declining revenue, increasing debt, or a high level of competition. The industry in which the company operates may also be facing challenges, such as changes in demand, market conditions, or technological disruption. The employee's own performance may also be a factor, such as if you are consistently underperforming or not meeting the company's expectations.<br> When you have a low level of job security, it can lead to decreased job satisfaction, morale, and commitment to the company. It can also create a negative impact on your personal life, as you may have to deal with financial stress and uncertainty about your future.<br> Employers can take steps to help increase job security for employees, such as providing clear communication about the company's plans, offering additional training and development opportunities, and providing competitive benefits and compensation packages. However, in some cases, the company may need to take more drastic measures, such as restructuring, downsizing, or even closing down, which can result in job loss for some employees.<br> Overall, a low level of job security can create a challenging and uncertain work environment for employees, which can impact your overall well-being and job satisfaction.</div>";
                                   $ad=0;
                    
                                   for($ad;$ad<=$total;$ad++)
                                   {
                                       $percent = intval($ad*10)."%";  
                                        echo '<script>
                                        parent.document.getElementById("progressbar_adj").innerHTML="<div style=\"width:'.$percent.';background:'.$color_adj.'; ;height:20px;\">&nbsp;</div>";
                                       parent.document.getElementById("information_adj").innerHTML="<div style=\"text-align:center;\">Job Security</div>";
                                       parent.document.getElementById("indicator_adj").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($ad*10).'%'.'</div>";
                                       parent.document.getElementById("content_adj").innerHTML="<div>'.$content_adj.'</div>";

                                       </script>';
                                   
                                   }
                                
                                }
                    
                            }
                    
                            if($key == "Work Environment") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $m=0;
                                    $total_att= $value;
                                    $color_att = "#00FF00;opacity: 0.5";
                                    
                                    $content_att = "<div class='col-md-11 'style=' text-align:justify;margin-left: auto;margin-right: auto;'>$description_Work_EnvironmentH</div>";
                                    
                                    // $content_att = "<div class='col-md-11 'style=' text-align:justify;margin-left: auto;margin-right: auto;'>You have a high level of work environment in your company, it means that the workplace conditions are generally positive, productive, and safe, and contribute to a satisfying work experience. A high level of work environment can include a range of factors that support a positive work experience, such as:<br> A safe and comfortable physical environment, well-maintained facilities, comfortable and ergonomic workstations, and adequate lighting and ventilation.<br> Supportive company culture that prioritize employee well-being, strong communication and collaboration, and opportunities for professional growth and development.<br> Clear expectations and goals, clear understanding of your role, responsibilities, and goals, as well as opportunities for feedback and recognition. Work-life balance, flexible work arrangements, paid time off, and parental leave.<br> Opportunities for employee input and feedback: Employees with a high level of work<br> environment often have opportunities to provide input and feedback on company policies,<br> practices, and decisions, which can help them feel more engaged and invested in your work.<br> Overall, a high level of work environment can contribute in your satisfaction, productivity, and<br> well-being. It can also help attract and retain top talent, as employees are more likely to stay with companies that prioritize your well-being and provide a positive work experience.</div>";
                    
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Work Environment</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.'</div>";

                                        </script>';
                                    
                                    }
                                } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $m=0;
                                    $total_att= $value;
                                    $color_att = "#FFA500;opacity: 0.5";
                                    //orange
                                    $content_att = "<div class='col-md-11 'style=' text-align:justify;margin-left: auto;margin-right: auto;'>$description_Work_EnvironmentA</div>";

                                    // $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> You have an average level of work environment in your company, it means that your workplace conditions are neither exceptionally positive nor particularly negative. An average level of work environment can include a mix of positive and negative factors, and may vary depending on the employee's individual experience and perception.<br> Some factors that could contribute to an average level of work environment might include: Adequate but not exceptional physical environment: The physical workplace may meet basic safety and comfort standards, but may not be particularly well-designed or attractive.<br><br>  Mixed company culture: While the company may have some values and practices that support employee well-being and a positive work experience, there may also be areas where the culture falls short.<br> Adequate but not exceptional opportunities for employee input and feedback: Employees may have some opportunities to provide input and feedback on company policies and practices, but these may not be as extensive or frequent as they would like.<br> Opportunities for professional growth and development, but not exceptional: The company may offer some opportunities for professional development, such as training or tuition reimbursement, but these may not be as extensive or well-supported as they could be.<br> Some work-life balance policies and benefits, but not exceptional: The company may offer some work-life balance policies and benefits, such as paid time off or flexible work arrangements, but these may not be as generous or well-designed as they could be.<br> Overall, an average level of work environment may not be particularly remarkable or inspiring, but it is also not necessarily a negative experience for employees. You may still be able to have a fulfilling and satisfying work experience, but may need to actively seek out opportunities to improve your work environment or advocate for changes to company policies and practices that they feel could be improved.</div>";
                    
                                    for($m;$m<=$total_att;$m++)
                                    {
                                        $percent = intval(($m*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:'.$percent.';background:'.$color_att.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Work Environment</div>";
                                        parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                        parent.document.getElementById("content_att").innerHTML="<div>'.$content_att.'</div>";
                                        </script>';
                                    
                                    }
                    
                                } else if ($value >= 0 && $value <= 4) {
                                    //  echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                     $m = 0;
                                     $total_att = $value;
                                     $color_att = "#FF0000;opacity:0.5";
                                    // red
                                    $content_att = "<div class='col-md-11 'style=' text-align:justify;margin-left: auto;margin-right: auto;'>$description_Work_EnvironmentL</div>";

                                     $content_att = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> You have a low level of work environment in your company, it means that your workplace conditions are generally negative and may be impacting your well-being and job satisfaction. A low level of work environment can create a challenging and stressful work environment, and can have a negative impact on your performance and retention.<br><br> Some factors that could contribute to a low level of work environment might include:<br> Poor physical environment: The workplace may be poorly maintained, uncomfortable, and unsafe, with inadequate lighting, ventilation, or other facilities.<br> Negative company culture: The Company may have values or practices that are not supportive of your well-being, with little emphasis on you development, collaboration, or feedback.<br> Limited opportunities for you input and feedback: You may have limited opportunities to provide input and feedback on company policies and practices, which can leave them feeling disempowered and disconnected from your work. Limited opportunities for professional growth and development: The Company may offer limited opportunities for professional development or career advancement, which can lead to your feeling stuck or frustrated in your current roles.<br> Little work-life balance policies and benefits: The company may offer limited policies and benefits to support work-life balance, such as inflexible work hours or limited time off, which can create a stressful and unsustainable work environment.<br> Overall, a low level of work environment can have a negative impact on you satisfaction, productivity, and well-being. You may feel undervalued, unsupported, and disengaged, and may be more likely to leave the company in search of a more positive work environment. Employers who are aware of a low level of work environment in your company should take proactive steps to address the issues and create a more positive and supportive work environment for you.</div>";
                    
                                     for ($m; $m <= $total_att; $m++) {
                                         $percent = intval(($m * 10)) . "%";
                                         echo '<script>
                                          parent.document.getElementById("progressbar_att").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_att . ';height:20px;\">&nbsp;</div>";
                                          parent.document.getElementById("information_att").innerHTML="<div style=\"text-align:center;\">Work Environment</div>";
                                          parent.document.getElementById("indicator_att").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($m*10).'%'.'</div>";
                                          parent.document.getElementById("content_att").innerHTML="<div>' . $content_att . '</div>";

                                        </script>';
                    
                                     }
                                 }
                            }
                    
                            if($key == "Work load") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                    <!-- <div id="progressbar_self" style="border:1px solid #ccc; border-radius: 5px;  "></div> -->
                                    <!-- Progress information -->
                                    <!-- <div id="information_self" ></div> -->
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Work_OverloadH</div>";
                                    
                                    // $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a high level of work overload in your company, it means that they are experiencing a significant and unsustainable amount of work or job demands. A high level of work overload can lead to stress, burnout, and a negative impact on you performance and well-being.<br> Some factors that could contribute to a high level of work overload might include: High job demands: you may have a high workload, with demanding deadlines and responsibilities that can be difficult to manage.<br> Insufficient resources: you may have limited resources or support to complete your work effectively, such as inadequate staffing, outdated equipment, or limited access to information or tools.<br> Inadequate training or support: you may not have received adequate training or support to effectively manage your workload or responsibilities, which can create additional stress and uncertainty.<br> Inflexible work hours: you may be expected to work long or irregular hours, with limited flexibility to manage your work-life balance.<br> Poor work processes: you may be dealing with inefficient or ineffective work processes or communication, which can create additional stress and workload.<br> Overall, a high level of work overload can have a negative impact on you satisfaction, productivity, and well-being. You may feel overwhelmed, exhausted, and may be more likely to experience<br> burnout or mental health issues. Employers who are aware of a high level of work overload in your company should take proactive steps to address the issues and support you, such as providing additional resources, training, or flexible work arrangements. It's important to create a work environment that is sustainable and supportive of you well-being in order to foster a positive and productive workplace culture.</div>";
                                    $color_self = "#00FF00;opacity: 0.5";
                                    // green
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Work load</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                    
                                } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Work_OverloadA</div>";

                                    // $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has an average level of work overload in your company, it means that they are experiencing a moderate amount of work or job demands that they can manage reasonably well. An average level of work overload can be challenging but manageable for you, and may not have a significant impact on your performance or well-being.<br> Some factors that could contribute to an average level of work overload might include:<br> Moderate job demands: you may have a reasonable workload, with manageable deadlines and responsibilities that they can handle effectively.<br> Adequate resources: you may have access to sufficient resources or support to complete your work effectively, such as adequate staffing, up-to-date equipment, or sufficient access to information or tools.<br> Adequate training or support: you may have received adequate training or support to effectively manage your workload or responsibilities, which can help them to feel confident and capable in your job.<br> Reasonable work hours: you may be able to manage your work-life balance reasonably well, with regular work hours and the ability to take time off when needed.<br> Effective work processes: you may be working with efficient and effective work processes or communication, which can help to reduce stress and workload. Overall, an average level of work overload can be a manageable challenge for you, and can be conducive to productivity and engagement in the workplace. Employers who are aware of an average level of work overload in your company should still monitor your workload and performance to ensure that they are not being pushed to your limits, and to offer support and resources as needed to maintain a sustainable and positive work environment.</div>";
                                    $color_self = '#FFA500;opacity:0.5';
                                    // orange
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Work load</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 4) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                    $self=0;
                                    $total= $value;
                                    
                                    $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Work_OverloadL</div>";

                                    // $content_self = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of work overload in your company, it means that they are not experiencing an excessive or unreasonable amount of work or job demands. A low level of work overload is generally considered a positive thing, as it can help you to feel less stressed, more engaged, and more productive.<br> Some factors that could contribute to a low level of work overload might include:<br> Reasonable job demands: you may have a manageable workload, with reasonable deadlines and responsibilities that they can handle effectively.<br> Sufficient resources: you may have access to adequate resources or support to complete your work effectively, such as sufficient staffing, up-to-date equipment, or good access to information or tools.<br> Adequate training or support: you may have received adequate training or support to effectively manage your workload or responsibilities, which can help them to feel confident and capable in your job.<br> Reasonable work hours: you may be able to manage your work-life balance effectively, with regular work hours and the ability to take time off when needed.<br> Efficient work processes: you may be working with efficient and effective work processes or communication, which can help to reduce stress and workload.<br> Overall, a low level of work overload can be a positive thing for you, as it can help them to feel more satisfied and engaged in your work. Employers who are aware of a low level of work overload in your company should still monitor your workload and performance to ensure that they are being challenged sufficiently, and to offer opportunities for growth and development as needed.</div>";
                                    $color_self = '#FF0000;opacity:0.5';
                                    // red
                                    for($self;$self<=$total;$self++)
                                    {
                                        $percent = intval(($self*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_self").innerHTML="<div style=\"width:'.$percent.';background:'.$color_self.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_self").innerHTML="<div style=\"text-align:center;\">Work load</div>";
                                        parent.document.getElementById("indicator_self").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($self*10).'%'.'</div>";
                                        parent.document.getElementById("content_self").innerHTML="<div>'.$content_self.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "Work Satisfaction") {
                    
                                if($value >= 9 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#00FF00;opacity: 0.5";
                                    //green
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Work_SatisfactionH</div>";
                                    // $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a high level of work satisfaction in their company, it means that they are generally happy, engaged, and fulfilled in their job. High levels of work satisfaction are generally considered a positive thing, as they can lead to higher levels of productivity, lower you turnover, and a better work environment overall.<br> Some factors that could contribute to a high level of work satisfaction might include:<br> Meaningful work: You may find their job to be meaningful, fulfilling, and aligned with their personal values or goals.<br> Supportive work environment: You may work in an environment that is supportive and respectful, with strong relationships with colleagues and management.<br> Opportunities for growth: You may have access to opportunities for learning, development, and career advancement, which can help them to feel challenged and motivated in their work. Fair compensation and benefits: You may feel that they are fairly compensated for their work, with competitive salaries and benefits packages.<br> Positive work-life balance: You may be able to balance their work and personal life effectively, with flexible schedules or work arrangements.<br> Recognition and feedback: You may receive regular recognition and feedback for their work, which can help them to feel valued and supported in their role.<br> Overall, a high level of work satisfaction is a positive thing for both you and employers, as it can lead to greater engagement, commitment, and productivity in the workplace. Employers who are aware of high levels of work satisfaction in their company should strive to maintain a positive work environment and offer opportunities for growth and development, to help ensure that their employee continue to feel challenged and engaged in their work.</div>";
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">Work Satisfaction</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.'</div>";
                                    </script>';
                    
                    }
                                } 
                                else if($value >= 6 && $value <= 8) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                    
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#FFA500;opacity:0.5";
                                    //orange
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Work_SatisfactionA</div>";

                                    // $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has an average level of work satisfaction in your company, it means that they are neither particularly satisfied nor dissatisfied with your job. You may find some aspects of your job fulfilling or enjoyable, while other aspects may be less fulfilling or even frustrating.<br> Some factors that could contribute to an average level of work satisfaction might include:<br> Workload and stress levels: you may feel that your workload and stress levels are manageable, but may not feel particularly challenged or engaged by your work.<br> Work environment: you may feel that your work environment is adequate, but may not feel particularly connected to your colleagues or the company culture.<br> Compensation and benefits: you may feel that your compensation and benefits are fair, but may not be particularly motivated by the level of compensation or the benefits package.<br> Opportunities for growth: you may have access to some opportunities for learning and development, but may not feel particularly challenged or motivated by these opportunities.<br> Work-life balance: you may be able to balance your work and personal life to some extent, but may not feel particularly satisfied with your work-life balance.<br> Overall, an average level of work satisfaction is not necessarily a negative thing, but it may indicate that th you is not particularly engaged or motivated by your work. Employers who are aware of average levels of work satisfaction in your company should consider ways to increase engagement and motivation among you, such as by offering more opportunities for growth and development, increasing you recognition and feedback, or providing a more supportive work environment.</div>";
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">Work Satisfaction</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study.'</div>";
                                    </script>';
                    
                    }
                                }
                                else if($value >= 0 && $value <= 5) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                    
                                    $total= $value;
                                    $color_study = "#FF0000;opacity:0.5";
                                    $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Work_SatisfactionL</div>";

                                    // $content_study = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of work satisfaction in your company, it means that they are generally unhappy or dissatisfied with your job. This can be a serious issue, as low work satisfaction can lead to decreased productivity, increased absenteeism, and higher turnover rates.<br> There are many factors that can contribute to a low level of work satisfaction, such as:<br> Job duties: You may not find your job duties interesting, engaging, or fulfilling. Workload and stress levels: you may feel overwhelmed by your workload, or may be experiencing high levels of stress on the job.<br> Work environment: you may not feel supported by your colleagues or managers, or may feel that the work environment is hostile or unsupportive.<br> Compensation and benefits: you may feel that they are not being fairly compensated for your work, or may not have access to adequate benefits or perks.<br> Opportunities for growth: you may feel that there are no opportunities for advancement or learning and development in your current role.<br> Work-life balance: you may feel that they are not able to balance your work and personal life, or that your job is negatively affecting your personal life.<br> Overall, a low level of work satisfaction can be a serious issue for both you and the employer. Employers should take steps to address the underlying causes of low work satisfaction, such as by offering more opportunities for growth and development, improving compensation and benefits, or providing a more supportive work environment. Additionally, employers can offer you recognition and feedback, provide opportunities for work-life balance, and actively work to improve communication and collaboration within the workplace.</div>";
                                    // red
                                    $st=0;
                                    for($st;$st<=$total;$st++)
                                    {
                                    $percent = intval(($st*10))."%"; 
                                    echo '<script>
                                    parent.document.getElementById("progressbar_study").innerHTML="<div style=\"width:'.$percent.';background:'.$color_study.';height:20px;\">&nbsp;</div>";
                                    parent.document.getElementById("information_study").innerHTML="<div style=\"text-align:center;\">Work Satisfaction</div>";
                                    parent.document.getElementById("indicator_study").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($st*10).'%'.'</div>";
                                    parent.document.getElementById("content_study").innerHTML="<div>'.$content_study .'</div>";
                                    
                                    </script>';
                    
                    }
                                }
                    
                            }
                    
                            if($key == "Work-Life Balance") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                    $color_dep="#00FF00;opacity: 0.5";
                                    //green
                                    // $color_dep = "#FF0000;opacity:0.5";
                                    // red
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> $description_Work_Life_BalanceH</div>";
                                    // $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> You have a high level of work-life balance in your company, it means that they are able to effectively balance your work responsibilities with your personal life and activities outside of work. This can be a very positive aspect of your job, as it allows them to maintain your physical and emotional health, maintain positive relationships with family and friends, and engage in activities that are important to them.<br> A high level of work-life balance can be achieved through a variety of factors, such as:<br> Flexible work arrangements: Employers may offer flexible schedules, telecommuting options, or other arrangements that allow you to better balance your work and personal obligations.<br> Fair workload: You may feel that your workload is reasonable and manageable, and that they are not being overburdened with excessive work.<br> Supportive work culture: The Company may have a culture that values work-life balance, and encourages you to prioritize your personal life and well-being.<br> Adequate time off: You may have adequate time off, such as vacation days, holidays, and sick leave, to attend to personal needs.<br> Positive relationships: You may have positive relationships with your colleagues and managers, which can help reduce stress and improve work-life balance.<br> Overall, a high level of work-life balance can have a positive impact on both you and the company. You with good work-life balance tend to be more productive, engaged, and motivated in your work, and are less likely to experience burnout or turnover. Employers can help support work- life balance by offering flexible work arrangements, promoting a supportive work culture, and ensuring that you have adequate time off to attend to personal needs.</div>";
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center;\">Work-Life Balance</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";
                                        </script>';
                                    
                                    }
                                } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                    $color_dep = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> $description_Work_Life_BalanceA</div>";

                                    // $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have an average level of work-life balance in your company, it means that they are able to balance your work responsibilities with your personal life and activities outside of work to some extent, but may experience some difficulty or strain in doing so.<br> An average level of work-life balance can occur for a variety of reasons, such as:<br> Moderate workload: You workload may be manageable most of the time, but may sometimes require them to work longer hours or take work home.<br> Limited flexibility: The Company may offer some flexibility in terms of schedules or working remotely, but it may not be enough to fully accommodate your personal needs or preferences.<br> Limited time off: you may have some time off, but it may not be enough to fully attend to personal needs or obligations.<br> Stressful work environment: The Company may have a stressful or demanding work environment that makes it difficult for you to balance work and personal life.<br> Limited support: you may not receive sufficient support from your colleagues or managers to help manage your workload and achieve work-life balance.<br> An average level of work-life balance can be a challenging aspect of a job, as it may lead to stress, burnout, and reduced job satisfaction. Employers can take steps to improve work-life balance for you, such as offering more flexible work arrangements, providing adequate time off, and promoting a supportive and healthy work culture. This can help you feel more supported and motivated in your work, and can ultimately benefit both you and the company.</div>";
                                    $d=0;
                                    for($d;$d<=$total;$d++)
                                    {
                                        $percent = intval(($d*10))."%";
                                        
                                        echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Work-Life Balance</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";

                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 0 && $value <= 4) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                            <?php
                                                                         
                                     $total= $value;
                                      $color_dep = "#FF0000;opacity:0.5";
                                    // red
                                    
                                     $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> $description_Work_Life_BalanceL</div>";

                                    //  $content_dep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a low level of work-life balance in their company, it means that they are struggling to balance the demands of their job with their personal life and activities outside of work. A low level of work-life balance can occur for a variety of reasons, such as:<br> Heavy workload: you may have too much work to do in the time available, leading to long hours or the need to take work home.<br> Inflexible work arrangements: The Company may have rigid schedules or may not offer any options for remote work, making it difficult for you to manage personal obligations and commitments.<br> Limited time off: you may have limited vacation time or personal days, making it difficult to take time off for personal needs or family obligations.<br> Stressful work environment: The Company may have a highly stressful or demanding work environment, making it difficult for you to achieve work-life balance.<br> Lack of support: you may not receive adequate support from their colleagues or managers to help manage their workload and achieve work-life balance.<br> Having a low level of work-life balance can be detrimental to your overall well-being, leading to stress, burnout, and decreased job satisfaction. Employers should take steps to help you achieve better work-life balance, such as providing flexible work arrangements, offering adequate time off, and promoting a supportive work culture. Improving work-life balance can ultimately benefit both you and the company by increasing productivity, motivation, and retention of you.</div>";
                                     $d=0;
                                     for($d;$d<=$total;$d++)
                                     {
                                         $percent = intval(($d*10))."%";
                                         
                                         echo '<script>
                                        parent.document.getElementById("progressbar_dep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_dep.'; height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_dep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Work-Life Balance</div>";
                                        parent.document.getElementById("indicator_dep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($d*10).'%'.'</div>";
                                        parent.document.getElementById("content_dep").innerHTML="<div>'.$content_dep.'</div>";
                                         </script>';
                                     
                                     }
                                 }
                    
                            }
                    
                            if($key == "Career Opportunities") {
                    
                                if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                     $color_anx = "#00FF00;opacity: 0.5";
                                    //  green

                                    // $color_anx ="#FF0000;opacity:0.5";
                                    // red
                                    $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Career_OpportunitiesH</div>";
                                    // $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a high level of career opportunities in your company, it means that they have the potential to advance in your career and take on new and challenging roles within the organization. There are several factors that can contribute to a high level of career opportunities, such as: Clear career paths: The Company may have well-defined career paths that provide you with a clear understanding of the skills, experience, and qualifications required to progress in your careers. Training and development: The Company may offer training and development programs that help you acquire the skills and knowledge they need to advance in your careers. Promotions and growth opportunities: The Company may regularly promote you or offer opportunities for growth and development within the organization, allowing you to take on new roles and responsibilities. Succession planning: The Company may have a formal succession planning process in place that identifies potential future leaders and provides them with the training and support they need to take on more senior roles. Supportive culture: The Company may have a culture that encourages and supports career development, providing you with the resources and guidance they need to achieve your career goals. Having a high level of career opportunities can be motivating for you and can help them feel valued and engaged in your work. It can also benefit the company by retaining talented you and ensuring that the organization has a strong pipeline of future leaders.</div>";
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\">Career Opportunities</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.'</div>";

                                        </script>';
                                    
                                    }
                                                                    } 
                                else if($value >= 5 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total=$value;
                                    $color_anx ="#FFA500;opacity:0.5";
                                    // orange
                                    $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Career_OpportunitiesH</div>";

                                    // $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'> You have an average level of career opportunities in their company, it means that there are some opportunities for career advancement, but they may be limited or not clearly defined.<br> Some factors that can contribute to an average level of career opportunities include: Limited job openings: The Company may have limited job openings or a relatively flat organizational structure, making it challenging for you to move up the ladder.<br> Unclear career paths: The Company may not have clearly defined career paths, making it difficult for you to understand the steps they need to take to advance in their careers.<br> Inadequate training and development: The Company may not offer sufficient training and development opportunities to help you acquire the skills and knowledge they need to take on more advanced roles.<br> Limited promotions and growth opportunities: The Company may not promote you or offer opportunities for growth and development as frequently as you would like. Insufficient succession planning: The Company may not have a formal succession<br> planning process in place, making it unclear who will take on leadership roles in the future.<br> An average level of career opportunities can still provide you with some potential for growth and development, but it may not be as robust or as clearly defined as you would prefer. Companies with an average level of career opportunities may need to focus on providing additional support and resources to help you advance in their careers, such as offering more training and development programs, creating more opportunities for promotion, or establishing clear career paths.</div>";
                                    $an=0;
                                    for($an;$an<=$total;$an++)
                                    {
                                    $percent = intval(($an*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:'.$percent.';background:'.$color_anx .'; ;height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\"> Career Opportunities </div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx.'</div>";
                                        </script>';
                                    
                                    }
                                } else if ($value >= 0 && $value <= 4) {
                                    //  echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                    
                                     $total = $value;
                                    //  $color_anx = "#81B622;opacity:0.5";
                                     $color_anx ="#FF0000;opacity:0.5";
                                    //red  
                                    $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Career_OpportunitiesL</div>";

                                    //  $content_anx = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of career opportunities in their company, it means that there are limited opportunities for career advancement or professional growth within the organization. Some factors that can contribute to a low level of career opportunities include: Limited job openings: The Company may have few job openings or a flat organizational structure, making it difficult for you to move up the ladder. Insufficient training and development: The Company may not offer sufficient training and development opportunities to help you acquire the skills and knowledge they need to take on more advanced roles. No clear career paths: The Company may not have clearly defined career paths, making it difficult for you to understand the steps they need to take to advance in their careers. Lack of promotions and growth opportunities: The Company may not promote you or offer opportunities for growth and development as frequently as you would like. Poor management and leadership: The Company may have poor management or leadership that does not prioritize career development or provide adequate support and resources to you. A low level of career opportunities can be discouraging for you, who may feel stuck in their current role with limited prospects for advancement. This can lead to decreased motivation, job satisfaction, and ultimately, increased turnover. Companies with a low level of career opportunities may need to focus on providing additional support and resources to help you advance in their careers. This could include offering more training and development programs, creating more opportunities for promotion, establishing clear career paths, or improving management and leadership. By prioritizing career development, companies can help retain you and create a more engaged and motivated workforce.</div>";
                                     $an = 0;
                                     for ($an; $an <= $total; $an++) {
                                         $percent = intval(($an * 10)) . "%";
                                         echo '<script>
                                        parent.document.getElementById("progressbar_anx").innerHTML="<div style=\"width:' . $percent . ';background:' . $color_anx . ';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_anx").innerHTML="<div style=\"text-align:center;\"> Career Opportunities</div>";
                                        parent.document.getElementById("indicator_anx").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($an*10).'%'.'</div>";
                                        parent.document.getElementById("content_anx").innerHTML="<div>'.$content_anx . '</div>";
                                        
                                        </script>';
                    
                                     }
                                 }
                    
                            }
                    
                            if($key == "Stress") {
                    
                                if($value >= 7 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#FF0000;opacity:0.5";
                                        // red
                                        $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_StressH</div>";
                                        //  $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a high level of stress in their company, it means that they are experiencing a significant amount of stress and pressure in their work environment. This can be due to a variety of factors, including:<br> Heavy workload: you may have a heavy workload with tight deadlines, making it difficult to manage their time and stay on top of their tasks.<br> High demands: you may be facing high demands from clients, customers, or management, which can increase their stress levels and create a sense of pressure.<br> Conflict with colleagues: you may be experiencing conflict or tension with colleagues, which can lead to a stressful work environment.<br> Uncertainty and instability: you may be facing uncertainty and instability in their job, such as the possibility of layoffs or a lack of job security.<br> Poor work-life balance: you may be struggling to balance their work responsibilities with their personal life, which can create additional stress and anxiety.<br> A high level of stress can have negative effects on your mental and physical health, as well as their job performance and overall job satisfaction. It can lead to burnout, decreased motivation, and increased absenteeism or turnover.<br> Employers can help address high levels of stress in the workplace by creating a supportive and positive work environment, offering resources and support for managing stress, and promoting work-life balance. This can include providing you with opportunities for relaxation, exercise, and other stress-reducing activities, as well as offering flexible work schedules or other accommodations to help you manage their stress levels. By prioritizing you well-being and reducing stress in the workplace, employers can help create a more positive and productive work environment.</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\"> Stress</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                     
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#FFA500;opacity:0.5";
                                        //orange 
                                    $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_StressA</div>";

                                    // $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have an average level of stress in your company, it may indicate that you experience some level of stress and anxiety at work, but are generally able to manage your workload and responsibilities in a manageable and reasonable manner. You may be able to prioritize tasks effectively and take regular breaks but may also feel that you have limited control over your workload and schedule. You may also feel somewhat supported by your colleagues and superiors in managing work-related stress but may not have full access to resources and support for managing stress, such as counselling services or stress management programs. Additionally, you may feel somewhat hesitant to communicate your stress and workload concerns with your employer or colleagues, and may not always receive a responsive or supportive response when you do so. Overall, an average level of stress suggests that while there may be room for improvement in terms of managing workplace stress, you are generally able to cope with the demands of your job in a reasonable manner.</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                     
                                    <?php
                                                                            
                                        $total=$value;
                                        $color_stress = "#00FF00;opacity: 0.5";
                                        // green
                                        $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_StressL</div>";

                                        // $content_stress = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>Your report of a low level of stress can indicate that you feel that your work responsibilities are manageable, and you are able to effectively manage your workload and prioritize tasks. You may feel that the demands of your job are reasonable and that you have control over your workload and schedule. You may be able to take regular breaks and avoid working excessive overtime, which can help to prevent burnout.<br> You have reported a low level of stress and may feel supported by your colleagues and superiors in managing work-related stress. You may feel that You are able to maintain a healthy work-life balance, which can help to reduce stress levels. You may also feel that You are able to effectively manage work-related stress and anxiety, and are able to communicate your stress and workload concerns with your employer or colleagues.<br> Overall, having a low level of stress can indicate a positive work environment, where the demands of the job are reasonable, and employees are supported in managing your workload and stress levels. It can lead to increased job satisfaction, improved mental and physical health, and better performance and productivity at work.</div>";
                                        $s=0;
                                        for($s;$s<=$total;$s++)
                                        {
                                        
                                            $percent = intval(($s*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_stress").innerHTML="<div style=\"width:'.$percent.';background:'.$color_stress.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_stress").innerHTML="<div style=\"text-align:center;\">Stress</div>";
                                            parent.document.getElementById("indicator_stress").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($s*10).'%'.'</div>";
                                            parent.document.getElementById("content_stress").innerHTML="<div>'.$content_stress.'</div>";
                                            </script>';
                                        
                                        }
                                }
                    
                            }
                    
                            if($key == "Anxiety") {
                    
                                if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total= $value;
                                    $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_AnxietyL</div>";
                                    // $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of anxiety in your company, it means that you are generally able to manage and cope with the challenges and demands of your job without experiencing excessive worry, nervousness, or fear. You may feel more confident and in control of your work and have a positive attitude towards your job and colleagues. You may also have effective coping mechanisms and strategies to deal with stressors and anxiety triggers in the workplace. Additionally, you may have a supportive work environment and access to resources and support for managing anxiety and stress. Overall, a low level of anxiety can contribute to a more positive and productive work experience for you.</div>";

                                    // $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a high level of anxiety in your company, it means that you are experiencing excessive worry, fear, and apprehension related to your work. This can have a negative impact on your overall well-being, job performance, and quality of life.<br> Anxiety in the workplace can be caused by a variety of factors, such as high workload, job insecurity, and poor communication with colleagues or supervisors, lack of support, unrealistic expectations, or difficult relationships with co-workers.<br> When you experiences high levels of anxiety at work, it can affect your ability to concentrate, make decisions, and perform your job responsibilities effectively. It can also lead to physical symptoms such as headaches, stomach-aches, and fatigue.<br> Employers have a responsibility to create a supportive work environment that promotes good mental health and well-being. This includes providing you with resources such as counselling services, stress management programs, and flexible work arrangements. Additionally, managers can work to improve communication, set realistic goals, and provide feedback and support to help you manage your anxiety and improve your job performance.</div> ";
                                    $color_time = "#00FF00;opacity: 0.5";
                                    // green
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\">Anxiety</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                    
                    
                                } 
                                else if($value >= 4 && $value <= 6) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                  
                                    <?php
                                                                        
                                    $total= $value;
                                     $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_AnxietyA</div>";

                                    // $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has an average level of anxiety in your company, it means that you may experience some level of anxiety or worry at work, but it does not significantly impact your performance or well-being. You may feel some level of stress from time to time but are generally able to manage it effectively and maintain a productive work life.<br> An average level of anxiety may be the result of various factors, such as job demands, workload, interpersonal relationships at work, or a lack of control over one's work environment. You may have some concerns or worries related to your work or job performance, but you are not severe enough to cause significant distress or interfere with your ability to function.<br> It is important to note that an average level of anxiety may still have negative effects on your overall well-being and productivity, especially if it persists over a long period. Therefore, it is essential to address and manage any underlying causes of anxiety to maintain a healthy work environment and support you well-being.</div>";
                                    $color_time = "#FFA500;opacity:0.5";
                                    // orange
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\">Anxiety</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                                }
                                else if($value >= 7 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
                                    ?>
                                 
                                    <?php
                                                                        
                                    $total= $value;
                                    
                                    $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_AnxietyH</div>";

                                    // $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a high level of anxiety in your company, it means that you are experiencing excessive worry, fear, and apprehension related to your work. This can have a negative impact on your overall well-being, job performance, and quality of life.<br> Anxiety in the workplace can be caused by a variety of factors, such as high workload, job insecurity, and poor communication with colleagues or supervisors, lack of support, unrealistic expectations, or difficult relationships with co-workers.<br> When you experiences high levels of anxiety at work, it can affect your ability to concentrate, make decisions, and perform your job responsibilities effectively. It can also lead to physical symptoms such as headaches, stomach-aches, and fatigue.<br> Employers have a responsibility to create a supportive work environment that promotes good mental health and well-being. This includes providing you with resources such as counselling services, stress management programs, and flexible work arrangements. Additionally, managers can work to improve communication, set realistic goals, and provide feedback and support to help you manage your anxiety and improve your job performance.</div> ";

                                    // $content_time = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of anxiety in your company, it means that you are generally able to manage and cope with the challenges and demands of your job without experiencing excessive worry, nervousness, or fear. You may feel more confident and in control of your work and have a positive attitude towards your job and colleagues. You may also have effective coping mechanisms and strategies to deal with stressors and anxiety triggers in the workplace. Additionally, you may have a supportive work environment and access to resources and support for managing anxiety and stress. Overall, a low level of anxiety can contribute to a more positive and productive work experience for you.</div>";
                                    $color_time = "#FF0000;opacity:0.5";
                                    // red
                                    $t=0;
                                    for($t;$t<=$total;$t++)
                                    {   
                                    $percent = intval(($t*10))."%"; 
                                        echo '<script>
                                        parent.document.getElementById("progressbar_time").innerHTML="<div style=\"width:'.$percent.';background:'.$color_time.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_time").innerHTML="<div style=\"text-align:center; font-weight:bold\">Anxiety</div>";
                                        parent.document.getElementById("indicator_time").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($t*10).'%'.'</div>";
                                        parent.document.getElementById("content_time").innerHTML="<div>'.$content_time.'</div>";
                                        </script>';
                                    
                                    }
                                }
                    
                            }
                    
                            if($key == "Depression") {
                    
                                if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total= $value;
                                        $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_DepressionL</div>";
                                        // $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of depression, they may generally feel positive about their life and work, experience pleasure and interest in activities they once enjoyed, have consistent energy and motivation levels, sleep well, not feel guilty, worthless, or helpless, make decisions with ease and focus well, maintain a stable weight, not experience physical symptoms due to depression, not have thoughts of death or suicide, feel connected to others, function well at work and in their personal life, and not feel that their depression is interfering with their ability to succeed. It's important to note that just because you may have a low level of depression doesn't necessarily mean they are immune to experiencing negative emotions or stress. It's always important to regularly check in with you and provide support if needed.</div>";

                                        // $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You reported a high level of depression, it may indicate that you are experiencing a range of symptoms that are impacting their overall well-being and functioning.<br> Feeling sad or hopeless about life or work, experiencing decreased pleasure or interest in activities, and having a decreased energy or motivation are all common symptoms of depression that can impact your productivity and engagement at work.<br> Having trouble sleeping or experiencing excessive sleepiness, feeling guilty or worthless, and having difficulty concentrating or making decisions can also make it difficult for an you to focus on work tasks and meet performance expectations.<br> Significant weight loss or weight gain, physical symptoms such as headaches or stomach aches, and thoughts of death or suicide may indicate a more severe form of depression that requires immediate attention and support.<br> Feeling isolated or disconnected from others and having trouble functioning at work or in personal life can further exacerbate symptoms of depression and impact your ability to perform their job duties effectively.<br> Overall, when you report a high level of depression, it is important for the employer to take this seriously and offer appropriate support and accommodations to help you manage their symptoms and improve their well-being. This may include offering access to mental health resources such as counselling services or therapy, flexible work arrangements, and time off to address their symptoms.</div> ";
                                        $color_sleep = "#00FF00;opacity: 0.5";
                                        // green
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Depression</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                } 
                                else if($value >= 4 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total= $value;
                                        $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_DepressionA</div>";
                                        // $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You reported an average level of depression based on the questions listed, it suggests that you may be experiencing some symptoms of depression, but you are not severe enough to significantly impact their daily life or work performance.<br> Feeling sad or hopeless about life or work, having decreased energy or motivation, and experiencing difficulty concentrating or making decisions are all symptoms of depression that can affect your productivity and job satisfaction.<br> While you may still be able to function at work and in their personal life, feeling guilty, worthless, or helpless can have negative effects on their self-esteem and overall well-being. Physical symptoms such as headaches or stomach aches can also impact their ability to work efficiently. If you is experiencing an average level of depression, it is important for their employer to offer support and resources to help them manage their symptoms and improve their mental health. This may include offering access to mental health services or your assistance programs, as well as promoting a positive and supportive work environment.</div>";
                                        $color_sleep = "#FFA500;opacity:0.5";
                                        // orange
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Depression</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                }
                                else if($value >= 8 && $value <= 10) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                  
                                        <?php
                                                                            
                                        $total= $value;
                                        
                                        $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_DepressionH</div>";
                                        // $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You reported a high level of depression, it may indicate that you are experiencing a range of symptoms that are impacting their overall well-being and functioning.<br> Feeling sad or hopeless about life or work, experiencing decreased pleasure or interest in activities, and having a decreased energy or motivation are all common symptoms of depression that can impact your productivity and engagement at work.<br> Having trouble sleeping or experiencing excessive sleepiness, feeling guilty or worthless, and having difficulty concentrating or making decisions can also make it difficult for an you to focus on work tasks and meet performance expectations.<br> Significant weight loss or weight gain, physical symptoms such as headaches or stomach aches, and thoughts of death or suicide may indicate a more severe form of depression that requires immediate attention and support.<br> Feeling isolated or disconnected from others and having trouble functioning at work or in personal life can further exacerbate symptoms of depression and impact your ability to perform their job duties effectively.<br> Overall, when you report a high level of depression, it is important for the employer to take this seriously and offer appropriate support and accommodations to help you manage their symptoms and improve their well-being. This may include offering access to mental health resources such as counselling services or therapy, flexible work arrangements, and time off to address their symptoms.</div> ";

                                        // $content_sleep = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You has a low level of depression, they may generally feel positive about their life and work, experience pleasure and interest in activities they once enjoyed, have consistent energy and motivation levels, sleep well, not feel guilty, worthless, or helpless, make decisions with ease and focus well, maintain a stable weight, not experience physical symptoms due to depression, not have thoughts of death or suicide, feel connected to others, function well at work and in their personal life, and not feel that their depression is interfering with their ability to succeed. It's important to note that just because you may have a low level of depression doesn't necessarily mean they are immune to experiencing negative emotions or stress. It's always important to regularly check in with you and provide support if needed.</div>";
                                        $color_sleep = "#FF0000;opacity:0.5";
                                        // red
                                        $sp=0;
                    
                                        for($sp;$sp<=$total;$sp++)
                                        {
                                        $percent = intval(($sp*10))."%"; 
                                            echo '<script>
                                            parent.document.getElementById("progressbar_sleep").innerHTML="<div style=\"width:'.$percent.';background:'.$color_sleep.';height:20px;\">&nbsp;</div>";
                                            parent.document.getElementById("information_sleep").innerHTML="<div style=\"text-align:center; font-weight:bold\">Depression</div>";
                                            parent.document.getElementById("indicator_sleep").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($sp*10).'%'.'</div>";
                                            parent.document.getElementById("content_sleep").innerHTML="<div>'.$content_sleep.'</div>";
                                            </script>';
                                        
                                        }
                                   }
                    
                            }
                    
                         
                    
                            if($key == "Coping Mechanism") {
                    
                                if($value >= 8 && $value <= 11) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                   
                                    <?php
                                    $total=$value;
                                    $color_cop ="#00FF00;opacity: 0.5";
                                    // green
                                    $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Coping_MechanismH</div>";
                                    // $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>A high level of coping mechanism in you can mean that you have the ability to effectively manage stressors and challenges in your work environment. Coping mechanisms refer to the various strategies and techniques that an individual uses to handle stress and adversity.<br> If an you has a high level of coping mechanism, it suggests that you are able to handle work- related stressors in a healthy and productive manner, which can lead to better job performance, job satisfaction, and overall well-being.<br> Some common coping mechanisms include exercise, relaxation techniques, social support, problem-solving, and cognitive reframing. You have developed effective coping mechanisms may be better equipped to handle challenging situations and maintain a positive attitude even in the face of adversity.</div> ";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Coping Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div style=\"text-align:center;\">'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                } 
                                else if($value >= 4 && $value <= 7) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FFA500;opacity:0.5";
                                    // orange
                                    $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Coping_MechanismA</div>";
                                    // $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You are with an average level of coping mechanism in your workplace means that you have moderate abilities to handle stress and adapt to challenging situations. You may have developed some coping strategies, but you may not be consistently effective in all situations. You may be able to manage stressors to some extent but may still struggle with particularly difficult or unexpected situations. You may also have areas where you need to improve your coping mechanisms, such as time management, communication, or problem-solving skills. Overall, an average level of coping mechanism suggests that you are capable of handling the demands of your job to a certain extent, but may benefit from additional support or training to further develop your coping skills.</div> ";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Coping Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div style=\"text-align:center;\">'.$content_cop.'</div>";

                                        </script>';
                                     
                                    }
                                }
                                else if($value >= 0 && $value <= 3) {
                                    // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
                                    ?>
                                    
                                    <?php
                                    $total=$value;
                                    $color_cop = "#FF0000;opacity:0.5";
                                    // red
                                    $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>$description_Coping_MechanismL</div>";
                                    // $content_cop = "<div class='col-md-11 ' style=' text-align: justify;margin-left: auto;margin-right: auto;'>You have a low level of coping mechanism in your company, it means that you may have difficulty managing the stressors and challenges of your job. Coping mechanisms refer to the ways in which individuals manage stress, anxiety, and other difficult emotions. If an you have a low level of coping mechanism, you may be more prone to burnout, emotional exhaustion, and other negative outcomes.<br> Some signs of low coping mechanism in you s may include avoiding difficult tasks, feeling overwhelmed by workloads, struggling to prioritize tasks, and experiencing frequent stress- related symptoms such as headaches, insomnia, and irritability. These you s may also struggle to maintain positive relationships with colleagues, supervisors, and customers due to your inability to manage stress and anxiety.<br> Employers can support you s with low coping mechanisms by providing resources such as counselling services, stress management training, and flexible work arrangements. Additionally, employers can work to create a workplace culture that values open communication, self-care, and work-life balance to support you s' mental health and well-being.</div>";
                                    $c=0;
                                    for($c;$c<=$total;$c++)
                                    {
                                       
                                        $percent = intval(($c*10))."%"; 
                                         echo '<script>
                                        parent.document.getElementById("progressbar_cop").innerHTML="<div style=\"width:'.$percent.';background:'.$color_cop.';height:20px;\">&nbsp;</div>";
                                        parent.document.getElementById("information_cop").innerHTML="<div style=\"text-align:center; font-weight:bold\">Coping Mechanism</div>";
                                        parent.document.getElementById("indicator_cop").innerHTML="<div style=\"font-size:14px;font-weight:bold;\">&nbsp;'.($c*10).'%'.'</div>";
                                        parent.document.getElementById("content_cop").innerHTML="<div>'.$content_cop.'</div>";
                                        </script>';
                                     
                                    }
                                }
                    
                            }
                    };
                    
                        ?>
                    
                    
                        
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    
                    <script type="text/javascript">
                    google.charts.load("current", {
                    packages: ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);
                    
                    function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                    ["Domain", "Score",{role: "style"}],
                   <?php

// Graph Bar
    
    $x = 0;
    foreach ($newArray_db as $key => $value) {

        if($key == "Job Security") {

            if($value >= 7 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Work Environment") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Work load") {

            if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Work Satisfaction") {

            if($value >= 9 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 6 && $value <= 8) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 5) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

        if($key == "Work-Life Balance") {

            if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Career Opportunities") {

            if($value >= 0 && $value <= 4) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 5 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Stress") {

            if($value >= 7 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Anxiety") {

            if($value >= 7 && $value <= 10) {
                // echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";green
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 6) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                // echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";red
                  echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            }

        }

        if($key == "Depression") {

            if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 8 && $value <= 10) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

      

        if($key == "Coping Mechanism") {

            if($value >= 8 && $value <= 11) {
                echo "['" . $key . "'," . $value . ",'color:#00FF00; opacity: 0.5'],";
            } 
            else if($value >= 4 && $value <= 7) {
                echo "['" . $key . "'," . $value . ",'color:#FFA500; opacity: 0.5'],";
            }
            else if($value >= 0 && $value <= 3) {
                echo "['" . $key . "'," . $value . ",'color:#FF0000; opacity: 0.5'],";
            }

        }

       
        $x++;
    }
    ?>
                    ]);
                    
                    var view = new google.visualization.DataView(data);
                    // view.setColumns([0, 1,
                    // {
                    //     calc: "stringify",
                    //     sourceColumn: 1,
                    //     type: "string",
                    //     role: "annotation"
                    // },
                    // 2
                    // ]);
                    
                    
                    var options = {
                   
                    title: "Score for respective domains",
                 
                    height: 650,
                    bar: {
                        groupWidth: "80%"
                    },
                    legend: {
                        position: "none"
                    },
                     vAxis: {
                            maxValue: 10,
                            minValue: 1
                        }
                    //   hAxis: {
                    //       scaleType: 'log',
                    //       format: 'number'
                    //   }
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
                    chart.draw(view, options);
                    }
                    
                    
                    
                    </script>
                    
                    <!--another graph -->
                
                    
                    <script src="js/student.js"> </script>
                   
     
<?php      

  }
  
$color_array = array('#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#A020F0', '#FFC0CB', '#FFA500', '#00008B', '#8B0000', '#023020', '#FFD700');

}else{
    include_once'../header/head.php';
      header("Location:take-test.php");
?>
        <!--Student not having any text then it shown -->
         <!--<div class=" container mx-auto row footer" style="margin-top:120px;">-->
         <!--                    <div class="container bg-primary p-3">-->
                                
         <!--                         <h3 class=" my-1 fw-bold text-center text-light">Welcome To Serac Education  </h3>-->
         <!--                    </div>-->
         <!--                     <div class="container">-->
         <!--                        <h3 class=" fw-bold">&nbsp;</h3>-->
         <!--                         <h3 class=" my-2 fw-bold text-center">You don't have take any test   </h3>-->
         <!--                         <p class=" my-2 fw-bold text-center">Please clicked  Assestment tab  and give a test also get your result within a second</p>-->
         <!--                          <div class="container align-middle">-->
         <!--                          <p class="fw-bold text-center"><span class="align-middle">Click Here </span>&nbsp;<a href="dashboard.php"  class="btn border align-middle btn-outline-primary">Dashboard</a></p>-->
         <!--                           </div>-->
         <!--                    </div>-->
                                 
         <!--              <div class="col bg-warning p-3">-->
         <!--               <h3 class=" my-1 fw-bold text-center text-light">Wish You All The Best !!</h3>-->
                       
         <!--              </div>-->
                        
         <!--            </div>  -->
<?php
}

?>

                         
 </body>
 </html>                 
                    
                    
