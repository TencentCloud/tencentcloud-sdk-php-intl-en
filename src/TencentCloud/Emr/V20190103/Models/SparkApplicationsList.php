<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Spark task list.
 *
 * @method string getID() Obtain Application ID.
 * @method void setID(string $ID) Set Application ID.
 * @method string getName() Obtain Application name.
 * @method void setName(string $Name) Set Application name.
 * @method string getUser() Obtain User.
 * @method void setUser(string $User) Set User.
 * @method integer getStartTime() Obtain Start time.
 * @method void setStartTime(integer $StartTime) Set Start time.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 * @method integer getDuration() Obtain Duration.
 * @method void setDuration(integer $Duration) Set Duration.
 * @method string getState() Obtain Status.
 * @method void setState(string $State) Set Status.
 * @method string getApplicationType() Obtain Type.
 * @method void setApplicationType(string $ApplicationType) Set Type.
 * @method integer getCoreSeconds() Obtain Number of cores multiplied by seconds.
 * @method void setCoreSeconds(integer $CoreSeconds) Set Number of cores multiplied by seconds.
 * @method string getMemorySeconds() Obtain Memory MB multiplied by seconds.
 * @method void setMemorySeconds(string $MemorySeconds) Set Memory MB multiplied by seconds.
 * @method string getInsight() Obtain Insight result.
 * @method void setInsight(string $Insight) Set Insight result.
 */
class SparkApplicationsList extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $ID;

    /**
     * @var string Application name.
     */
    public $Name;

    /**
     * @var string User.
     */
    public $User;

    /**
     * @var integer Start time.
     */
    public $StartTime;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @var integer Duration.
     */
    public $Duration;

    /**
     * @var string Status.
     */
    public $State;

    /**
     * @var string Type.
     */
    public $ApplicationType;

    /**
     * @var integer Number of cores multiplied by seconds.
     */
    public $CoreSeconds;

    /**
     * @var string Memory MB multiplied by seconds.
     */
    public $MemorySeconds;

    /**
     * @var string Insight result.
     */
    public $Insight;

    /**
     * @param string $ID Application ID.
     * @param string $Name Application name.
     * @param string $User User.
     * @param integer $StartTime Start time.
     * @param integer $EndTime End time.
     * @param integer $Duration Duration.
     * @param string $State Status.
     * @param string $ApplicationType Type.
     * @param integer $CoreSeconds Number of cores multiplied by seconds.
     * @param string $MemorySeconds Memory MB multiplied by seconds.
     * @param string $Insight Insight result.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("CoreSeconds",$param) and $param["CoreSeconds"] !== null) {
            $this->CoreSeconds = $param["CoreSeconds"];
        }

        if (array_key_exists("MemorySeconds",$param) and $param["MemorySeconds"] !== null) {
            $this->MemorySeconds = $param["MemorySeconds"];
        }

        if (array_key_exists("Insight",$param) and $param["Insight"] !== null) {
            $this->Insight = $param["Insight"];
        }
    }
}
