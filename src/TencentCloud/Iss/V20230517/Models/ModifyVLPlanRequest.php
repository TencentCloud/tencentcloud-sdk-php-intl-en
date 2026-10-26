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
 * ModifyVLPlan request structure.
 *
 * @method string getVLPlanId() Obtain <p>Plan ID</p>
 * @method void setVLPlanId(string $VLPlanId) Set <p>Plan ID</p>
 * @method string getName() Obtain <p>New plan name</p>
 * @method void setName(string $Name) Set <p>New plan name</p>
 * @method string getDescribe() Obtain <p>New plan description.</p>
 * @method void setDescribe(string $Describe) Set <p>New plan description.</p>
 * @method string getVLTemplateId() Obtain <p>ID of the newly associated visual understanding template</p>
 * @method void setVLTemplateId(string $VLTemplateId) Set <p>ID of the newly associated visual understanding template</p>
 * @method integer getFileExpires() Obtain <p>New storage days, range [7, 1080]. 0 means no modification</p>
 * @method void setFileExpires(integer $FileExpires) Set <p>New storage days, range [7, 1080]. 0 means no modification</p>
 * @method CallbackURL getCallback() Obtain <p>New callback configuration</p>
 * @method void setCallback(CallbackURL $Callback) Set <p>New callback configuration</p>
 */
class ModifyVLPlanRequest extends AbstractModel
{
    /**
     * @var string <p>Plan ID</p>
     */
    public $VLPlanId;

    /**
     * @var string <p>New plan name</p>
     */
    public $Name;

    /**
     * @var string <p>New plan description.</p>
     */
    public $Describe;

    /**
     * @var string <p>ID of the newly associated visual understanding template</p>
     */
    public $VLTemplateId;

    /**
     * @var integer <p>New storage days, range [7, 1080]. 0 means no modification</p>
     */
    public $FileExpires;

    /**
     * @var CallbackURL <p>New callback configuration</p>
     */
    public $Callback;

    /**
     * @param string $VLPlanId <p>Plan ID</p>
     * @param string $Name <p>New plan name</p>
     * @param string $Describe <p>New plan description.</p>
     * @param string $VLTemplateId <p>ID of the newly associated visual understanding template</p>
     * @param integer $FileExpires <p>New storage days, range [7, 1080]. 0 means no modification</p>
     * @param CallbackURL $Callback <p>New callback configuration</p>
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

        if (array_key_exists("FileExpires",$param) and $param["FileExpires"] !== null) {
            $this->FileExpires = $param["FileExpires"];
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new CallbackURL();
            $this->Callback->deserialize($param["Callback"]);
        }
    }
}
