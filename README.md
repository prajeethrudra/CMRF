# CMRF
Web application to manage, allocate, release the government relief funds to victims

**CMRF- Chief Minister Relief Fund. This web application is designed with unique blend of graphs,tables,pie charts for tracking,managing,allocation of the government relief funds to victims**.

In this application, users are typically modified into three types:
* Victim: Victim is the user who raises the request for funds.
    * Each Victim will be given an Identification Number and 
    * upon filling up the relief form and supporting documents he can raise the request for funds.
    * Victim can track his application status by providing his Identification Number.
* Admin: Admin can review the application of the victim and takes the decision.
    * Admin can review the application submitted by the victim.
    * Admin can either reject or approve the application. if the application is rejected a message will be delivered to the victim.
    * Upon approval he can send the application to the funds department stating the amount of funds which are need to be released. 
    * Admin can track the application at all stages.
    * Admin can track all the funds which are in hold, released etc.
* FundsAllocator: FundsAllocator is responsible for allocating the funds to the applications which have been forwarded by the admin.
    * He/she is responsible for allocation of funds and updating the status of application.
    * He/She confirms the application and sends it back to the admin.
