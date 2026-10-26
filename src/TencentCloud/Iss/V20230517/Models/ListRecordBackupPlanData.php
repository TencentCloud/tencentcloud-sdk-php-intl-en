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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * data for querying the recording cloud migration plan list
 *
 * @method string getPlanId() Obtain Recording cloud migration plan ID
 * @method void setPlanId(string $PlanId) Set Recording cloud migration plan ID
 * @method string getPlanName() Obtain Recording cloud migration plan name
 * @method void setPlanName(string $PlanName) Set Recording cloud migration plan name
 * @method string getTemplateId() Obtain Video cloud template ID
 * @method void setTemplateId(string $TemplateId) Set Video cloud template ID
 * @method string getDescribe() Obtain Description of the recording cloud migration plan
 * @method void setDescribe(string $Describe) Set Description of the recording cloud migration plan
 * @method LifeCycleData getLifeCycle() Obtain Cloud file lifecycle
 * @method void setLifeCycle(LifeCycleData $LifeCycle) Set Cloud file lifecycle
 * @method integer getStatus() Obtain Recording cloud migration plan status. `1`: in normal use. `0`: deleting, unavailable.
 * @method void setStatus(integer $Status) Set Recording cloud migration plan status. `1`: in normal use. `0`: deleting, unavailable.
 * @method integer getChannelCount() Obtain Number of channels
 * @method void setChannelCount(integer $ChannelCount) Set Number of channels
 * @method string getCreateAt() Obtain Creation time.
 * @method void setCreateAt(string $CreateAt) Set Creation time.
 * @method string getUpdateAt() Obtain Modification time.
 * @method void setUpdateAt(string $UpdateAt) Set Modification time.
 */
class ListRecordBackupPlanData extends AbstractModel
{
    /**
     * @var string Recording cloud migration plan ID
     */
    public $PlanId;

    /**
     * @var string Recording cloud migration plan name
     */
    public $PlanName;

    /**
     * @var string Video cloud template ID
     */
    public $TemplateId;

    /**
     * @var string Description of the recording cloud migration plan
     */
    public $Describe;

    /**
     * @var LifeCycleData Cloud file lifecycle
     */
    public $LifeCycle;

    /**
     * @var integer Recording cloud migration plan status. `1`: in normal use. `0`: deleting, unavailable.
     */
    public $Status;

    /**
     * @var integer Number of channels
     */
    public $ChannelCount;

    /**
     * @var string Creation time.
     */
    public $CreateAt;

    /**
     * @var string Modification time.
     */
    public $UpdateAt;

    /**
     * @param string $PlanId Recording cloud migration plan ID
     * @param string $PlanName Recording cloud migration plan name
     * @param string $TemplateId Video cloud template ID
     * @param string $Describe Description of the recording cloud migration plan
     * @param LifeCycleData $LifeCycle Cloud file lifecycle
     * @param integer $Status Recording cloud migration plan status. `1`: in normal use. `0`: deleting, unavailable.
     * @param integer $ChannelCount Number of channels
     * @param string $CreateAt Creation time.
     * @param string $UpdateAt Modification time.
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
        if (array_key_exists("PlanId",$param) and $param["PlanId"] !== null) {
            $this->PlanId = $param["PlanId"];
        }

        if (array_key_exists("PlanName",$param) and $param["PlanName"] !== null) {
            $this->PlanName = $param["PlanName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = new LifeCycleData();
            $this->LifeCycle->deserialize($param["LifeCycle"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
