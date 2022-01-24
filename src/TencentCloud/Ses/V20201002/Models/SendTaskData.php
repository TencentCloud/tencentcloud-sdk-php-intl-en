<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Email sending task data
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method string getFromEmailAddress() Obtain Sender address
 * @method void setFromEmailAddress(string $FromEmailAddress) Set Sender address
 * @method integer getReceiverId() Obtain Recipient group ID
 * @method void setReceiverId(integer $ReceiverId) Set Recipient group ID
 * @method integer getTaskStatus() Obtain Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent
 * @method void setTaskStatus(integer $TaskStatus) Set Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent
 * @method integer getTaskType() Obtain Task type. `1`: immediate; `2`: scheduled; `3`: recurring
 * @method void setTaskType(integer $TaskType) Set Task type. `1`: immediate; `2`: scheduled; `3`: recurring
 * @method integer getRequestCount() Obtain Number of emails requested to be sent
 * @method void setRequestCount(integer $RequestCount) Set Number of emails requested to be sent
 * @method integer getSendCount() Obtain Number of emails sent
 * @method void setSendCount(integer $SendCount) Set Number of emails sent
 * @method integer getCacheCount() Obtain Number of emails cached
 * @method void setCacheCount(integer $CacheCount) Set Number of emails cached
 * @method string getCreateTime() Obtain Task creation time
 * @method void setCreateTime(string $CreateTime) Set Task creation time
 * @method string getUpdateTime() Obtain Task update time
 * @method void setUpdateTime(string $UpdateTime) Set Task update time
 * @method string getSubject() Obtain Email subject
 * @method void setSubject(string $Subject) Set Email subject
 * @method Template getTemplate() Obtain Template and template data
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setTemplate(Template $Template) Set Template and template data
Note: This field may return `null`, indicating that no valid value can be found.
 * @method CycleEmailParam getCycleParam() Obtain Parameters of a recurring task
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setCycleParam(CycleEmailParam $CycleParam) Set Parameters of a recurring task
Note: This field may return `null`, indicating that no valid value can be found.
 * @method TimedEmailParam getTimedParam() Obtain Parameters of a scheduled task
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setTimedParam(TimedEmailParam $TimedParam) Set Parameters of a scheduled task
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getErrMsg() Obtain Task exception information
Note: This field may return `null`, indicating that no valid value can be found.
 * @method void setErrMsg(string $ErrMsg) Set Task exception information
Note: This field may return `null`, indicating that no valid value can be found.
 * @method string getReceiversName() Obtain Recipient group name
 * @method void setReceiversName(string $ReceiversName) Set Recipient group name
 */
class SendTaskData extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var string Sender address
     */
    public $FromEmailAddress;

    /**
     * @var integer Recipient group ID
     */
    public $ReceiverId;

    /**
     * @var integer Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent
     */
    public $TaskStatus;

    /**
     * @var integer Task type. `1`: immediate; `2`: scheduled; `3`: recurring
     */
    public $TaskType;

    /**
     * @var integer Number of emails requested to be sent
     */
    public $RequestCount;

    /**
     * @var integer Number of emails sent
     */
    public $SendCount;

    /**
     * @var integer Number of emails cached
     */
    public $CacheCount;

    /**
     * @var string Task creation time
     */
    public $CreateTime;

    /**
     * @var string Task update time
     */
    public $UpdateTime;

    /**
     * @var string Email subject
     */
    public $Subject;

    /**
     * @var Template Template and template data
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $Template;

    /**
     * @var CycleEmailParam Parameters of a recurring task
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $CycleParam;

    /**
     * @var TimedEmailParam Parameters of a scheduled task
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $TimedParam;

    /**
     * @var string Task exception information
Note: This field may return `null`, indicating that no valid value can be found.
     */
    public $ErrMsg;

    /**
     * @var string Recipient group name
     */
    public $ReceiversName;

    /**
     * @param integer $TaskId Task ID
     * @param string $FromEmailAddress Sender address
     * @param integer $ReceiverId Recipient group ID
     * @param integer $TaskStatus Task status. `1`: to start; `5`: sending; `6`: sending suspended today; `7`: sending error; `10`: sent
     * @param integer $TaskType Task type. `1`: immediate; `2`: scheduled; `3`: recurring
     * @param integer $RequestCount Number of emails requested to be sent
     * @param integer $SendCount Number of emails sent
     * @param integer $CacheCount Number of emails cached
     * @param string $CreateTime Task creation time
     * @param string $UpdateTime Task update time
     * @param string $Subject Email subject
     * @param Template $Template Template and template data
Note: This field may return `null`, indicating that no valid value can be found.
     * @param CycleEmailParam $CycleParam Parameters of a recurring task
Note: This field may return `null`, indicating that no valid value can be found.
     * @param TimedEmailParam $TimedParam Parameters of a scheduled task
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $ErrMsg Task exception information
Note: This field may return `null`, indicating that no valid value can be found.
     * @param string $ReceiversName Recipient group name
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("SendCount",$param) and $param["SendCount"] !== null) {
            $this->SendCount = $param["SendCount"];
        }

        if (array_key_exists("CacheCount",$param) and $param["CacheCount"] !== null) {
            $this->CacheCount = $param["CacheCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("CycleParam",$param) and $param["CycleParam"] !== null) {
            $this->CycleParam = new CycleEmailParam();
            $this->CycleParam->deserialize($param["CycleParam"]);
        }

        if (array_key_exists("TimedParam",$param) and $param["TimedParam"] !== null) {
            $this->TimedParam = new TimedEmailParam();
            $this->TimedParam->deserialize($param["TimedParam"]);
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ReceiversName",$param) and $param["ReceiversName"] !== null) {
            $this->ReceiversName = $param["ReceiversName"];
        }
    }
}
