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
 * Visual understanding plan information
 *
 * @method string getVLPlanId() Obtain <p>Plan ID</p>
 * @method void setVLPlanId(string $VLPlanId) Set <p>Plan ID</p>
 * @method string getName() Obtain <p>Plan name.</p>
 * @method void setName(string $Name) Set <p>Plan name.</p>
 * @method string getDescribe() Obtain <p>Plan description.</p>
 * @method void setDescribe(string $Describe) Set <p>Plan description.</p>
 * @method string getVLTemplateId() Obtain <p>ID of the visual understanding template</p>
 * @method void setVLTemplateId(string $VLTemplateId) Set <p>ID of the visual understanding template</p>
 * @method CallbackURL getCallback() Obtain <p>Callback notification configuration</p>
 * @method void setCallback(CallbackURL $Callback) Set <p>Callback notification configuration</p>
 * @method integer getFileExpires() Obtain <p>File expiration time (seconds)</p>
 * @method void setFileExpires(integer $FileExpires) Set <p>File expiration time (seconds)</p>
 * @method integer getChannelCount() Obtain <p>Number of channels included in the plan</p>
 * @method void setChannelCount(integer $ChannelCount) Set <p>Number of channels included in the plan</p>
 * @method string getCreatedAt() Obtain <p>Creation time.</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Creation time.</p>
 * @method string getUpdatedAt() Obtain <p>Last update time</p>
 * @method void setUpdatedAt(string $UpdatedAt) Set <p>Last update time</p>
 */
class VLPlanInfo extends AbstractModel
{
    /**
     * @var string <p>Plan ID</p>
     */
    public $VLPlanId;

    /**
     * @var string <p>Plan name.</p>
     */
    public $Name;

    /**
     * @var string <p>Plan description.</p>
     */
    public $Describe;

    /**
     * @var string <p>ID of the visual understanding template</p>
     */
    public $VLTemplateId;

    /**
     * @var CallbackURL <p>Callback notification configuration</p>
     */
    public $Callback;

    /**
     * @var integer <p>File expiration time (seconds)</p>
     */
    public $FileExpires;

    /**
     * @var integer <p>Number of channels included in the plan</p>
     */
    public $ChannelCount;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>Last update time</p>
     */
    public $UpdatedAt;

    /**
     * @param string $VLPlanId <p>Plan ID</p>
     * @param string $Name <p>Plan name.</p>
     * @param string $Describe <p>Plan description.</p>
     * @param string $VLTemplateId <p>ID of the visual understanding template</p>
     * @param CallbackURL $Callback <p>Callback notification configuration</p>
     * @param integer $FileExpires <p>File expiration time (seconds)</p>
     * @param integer $ChannelCount <p>Number of channels included in the plan</p>
     * @param string $CreatedAt <p>Creation time.</p>
     * @param string $UpdatedAt <p>Last update time</p>
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
        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("VLTemplateId",$param) and $param["VLTemplateId"] !== null) {
            $this->VLTemplateId = $param["VLTemplateId"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
