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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Recording task.
 *
 * @method string getTaskId() Obtain Recording task ID.
 * @method void setTaskId(string $TaskId) Set Recording task ID.
 * @method string getDomainName() Obtain Push domain name.
 * @method void setDomainName(string $DomainName) Set Push domain name.
 * @method string getAppName() Obtain Push path.
 * @method void setAppName(string $AppName) Set Push path.
 * @method string getStreamName() Obtain Stream name.
 * @method void setStreamName(string $StreamName) Set Stream name.
 * @method integer getStartTime() Obtain The start time of the recording task in Unix timestamp. 
 * @method void setStartTime(integer $StartTime) Set The start time of the recording task in Unix timestamp. 
 * @method integer getEndTime() Obtain The end time of the recording task in Unix timestamp. 
 * @method void setEndTime(integer $EndTime) Set The end time of the recording task in Unix timestamp. 
 * @method integer getTemplateId() Obtain Recording template ID.
 * @method void setTemplateId(integer $TemplateId) Set Recording template ID.
 * @method integer getStopped() Obtain The StopRecordTask API call stops the task at the Unix timestamp. A value of 0 indicates that the API has not been called to stop the task.
 * @method void setStopped(integer $Stopped) Set The StopRecordTask API call stops the task at the Unix timestamp. A value of 0 indicates that the API has not been called to stop the task.
 */
class RecordTask extends AbstractModel
{
    /**
     * @var string Recording task ID.
     */
    public $TaskId;

    /**
     * @var string Push domain name.
     */
    public $DomainName;

    /**
     * @var string Push path.
     */
    public $AppName;

    /**
     * @var string Stream name.
     */
    public $StreamName;

    /**
     * @var integer The start time of the recording task in Unix timestamp. 
     */
    public $StartTime;

    /**
     * @var integer The end time of the recording task in Unix timestamp. 
     */
    public $EndTime;

    /**
     * @var integer Recording template ID.
     */
    public $TemplateId;

    /**
     * @var integer The StopRecordTask API call stops the task at the Unix timestamp. A value of 0 indicates that the API has not been called to stop the task.
     */
    public $Stopped;

    /**
     * @param string $TaskId Recording task ID.
     * @param string $DomainName Push domain name.
     * @param string $AppName Push path.
     * @param string $StreamName Stream name.
     * @param integer $StartTime The start time of the recording task in Unix timestamp. 
     * @param integer $EndTime The end time of the recording task in Unix timestamp. 
     * @param integer $TemplateId Recording template ID.
     * @param integer $Stopped The StopRecordTask API call stops the task at the Unix timestamp. A value of 0 indicates that the API has not been called to stop the task.
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

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Stopped",$param) and $param["Stopped"] !== null) {
            $this->Stopped = $param["Stopped"];
        }
    }
}
