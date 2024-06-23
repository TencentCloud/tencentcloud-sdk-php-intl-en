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
 * Task Submission Record
 *
 * @method integer getId() Obtain Task Submission Record ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setId(integer $Id) Set Task Submission Record ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getScriptContent() Obtain Script ContentNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setScriptContent(string $ScriptContent) Set Script ContentNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Task Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Task Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Task StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Task StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AdhocRecord extends AbstractModel
{
    /**
     * @var integer Task Submission Record ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Id;

    /**
     * @var string Script ContentNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScriptContent;

    /**
     * @var string Task Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Task StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceId;

    /**
     * @param integer $Id Task Submission Record ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ScriptContent Script ContentNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Task Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Task StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
