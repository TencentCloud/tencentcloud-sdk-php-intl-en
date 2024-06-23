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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * No
 *
 * @method string getClusterId() Obtain No
 * @method void setClusterId(string $ClusterId) Set No
 * @method string getStageId() Obtain No
 * @method void setStageId(string $StageId) Set No
 * @method string getJobId() Obtain No
 * @method void setJobId(string $JobId) Set No
 * @method string getStageName() Obtain No
 * @method void setStageName(string $StageName) Set No
 * @method string getType() Obtain No
 * @method void setType(string $Type) Set No
 * @method string getMode() Obtain No
 * @method void setMode(string $Mode) Set No
 * @method string getVersion() Obtain No
 * @method void setVersion(string $Version) Set No
 * @method string getQueue() Obtain No
 * @method void setQueue(string $Queue) Set No
 * @method string getContent() Obtain No
 * @method void setContent(string $Content) Set No
 * @method array getParameters() Obtain No
 * @method void setParameters(array $Parameters) Set No
 * @method string getDescription() Obtain No
 * @method void setDescription(string $Description) Set No
 * @method string getProjectId() Obtain No
 * @method void setProjectId(string $ProjectId) Set No
 * @method string getJobType() Obtain No
 * @method void setJobType(string $JobType) Set No
 * @method string getWorkFlowId() Obtain No
 * @method void setWorkFlowId(string $WorkFlowId) Set No
 */
class StageCloudApiRequest extends AbstractModel
{
    /**
     * @var string No
     */
    public $ClusterId;

    /**
     * @var string No
     */
    public $StageId;

    /**
     * @var string No
     */
    public $JobId;

    /**
     * @var string No
     */
    public $StageName;

    /**
     * @var string No
     */
    public $Type;

    /**
     * @var string No
     */
    public $Mode;

    /**
     * @var string No
     */
    public $Version;

    /**
     * @var string No
     */
    public $Queue;

    /**
     * @var string No
     */
    public $Content;

    /**
     * @var array No
     */
    public $Parameters;

    /**
     * @var string No
     */
    public $Description;

    /**
     * @var string No
     */
    public $ProjectId;

    /**
     * @var string No
     */
    public $JobType;

    /**
     * @var string No
     */
    public $WorkFlowId;

    /**
     * @param string $ClusterId No
     * @param string $StageId No
     * @param string $JobId No
     * @param string $StageName No
     * @param string $Type No
     * @param string $Mode No
     * @param string $Version No
     * @param string $Queue No
     * @param string $Content No
     * @param array $Parameters No
     * @param string $Description No
     * @param string $ProjectId No
     * @param string $JobType No
     * @param string $WorkFlowId No
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StageId",$param) and $param["StageId"] !== null) {
            $this->StageId = $param["StageId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("StageName",$param) and $param["StageName"] !== null) {
            $this->StageName = $param["StageName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("WorkFlowId",$param) and $param["WorkFlowId"] !== null) {
            $this->WorkFlowId = $param["WorkFlowId"];
        }
    }
}
