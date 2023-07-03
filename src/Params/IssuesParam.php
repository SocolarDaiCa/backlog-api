<?php

namespace Itigoppo\BacklogApi\Params;

class IssuesParam
{
    /**
     * @var array|int[]
     */
    public array $projectId = [];
    public array $issueTypeId;

    /**
     * @param array|int[] $projectId
     * @return array|int[] $issueTypeId
     */
    public function __construct(
        array $projectId = [],
        array $issueTypeId = [],
// categoryId[]
// (Multiple)	Number	Category ID
// versionId[]
// (Multiple)	Number	Version ID
// milestoneId[]
// (Multiple)	Number	Milestone ID
// statusId[]
// (Multiple)	Number	Status ID
// API of status list for each project
// priorityId[]
// (Multiple)	Number	Priority ID
// assigneeId[]
// (Multiple)	Number	Assignee ID
// createdUserId[]
// (Multiple)	Number	Created User ID
// resolutionId[]
// (Multiple)	Number	Resolution ID
// parentChild	Number	Subtasking
// 0: All
// 1: Exclude Child Issue
// 2: Child Issue
// 3: Neither Parent Issue nor Child Issue
// 4: Parent Issue
// attachment	Boolean	True to make include Issue with Attachment
// sharedFile	Boolean	True to make include Issue with File
// sort	String	What to sort results by
// “issueType”
// “category”
// “version”
// “milestone”
// “summary”
// “status”
// “priority”
// “attachment”
// “sharedFile”
// “created”
// “createdUser”
// “updated”
// “updatedUser”
// “assignee”
// “startDate”
// “dueDate”
// “estimatedHours”
// “actualHours”
// “childIssue”
// “customField_${id}”
// order	String	Order of the sort “asc” or “desc” default=“desc”
// offset	Number
// count	Number	number of records to retrieve(1-100) default=20
// createdSince	String	Created since (yyyy-MM-dd)
// createdUntil	String	Created until (yyyy-MM-dd)
// updatedSince	String	Updated since (yyyy-MM-dd)
// updatedUntil	String	Updated until (yyyy-MM-dd)
// startDateSince	String	Start Date since (yyyy-MM-dd)
// startDateUntil	String	Start Date until (yyyy-MM-dd)
// dueDateSince	String	Due Date since (yyyy-MM-dd)
// dueDateUntil	String	Due Date until (yyyy-MM-dd)
// id[]
// (Multiple)	Number	Issue ID
// parentIssueId[]
// (Multiple)	Number	Parent Issue ID
// keyword	String	Keyword
    ) {
        $this->projectId = $projectId;
        $this->issueTypeId = $issueTypeId;
    }
}
