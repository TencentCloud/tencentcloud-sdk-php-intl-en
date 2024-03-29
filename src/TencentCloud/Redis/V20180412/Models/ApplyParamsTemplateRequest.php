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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyParamsTemplate request structure.
 *
 * @method array getInstanceIds() Obtain List of instance IDs
 * @method void setInstanceIds(array $InstanceIds) Set List of instance IDs
 * @method string getTemplateId() Obtain ID of the parameter template to be applied
 * @method void setTemplateId(string $TemplateId) Set ID of the parameter template to be applied
 */
class ApplyParamsTemplateRequest extends AbstractModel
{
    /**
     * @var array List of instance IDs
     */
    public $InstanceIds;

    /**
     * @var string ID of the parameter template to be applied
     */
    public $TemplateId;

    /**
     * @param array $InstanceIds List of instance IDs
     * @param string $TemplateId ID of the parameter template to be applied
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
