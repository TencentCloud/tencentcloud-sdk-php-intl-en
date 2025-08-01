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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrometheusTempSync request structure.
 *
 * @method string getTemplateId() Obtain Template ID
 * @method void setTemplateId(string $TemplateId) Set Template ID
 * @method array getTargets() Obtain List of unsynced objects
 * @method void setTargets(array $Targets) Set List of unsynced objects
 */
class DeletePrometheusTempSyncRequest extends AbstractModel
{
    /**
     * @var string Template ID
     */
    public $TemplateId;

    /**
     * @var array List of unsynced objects
     */
    public $Targets;

    /**
     * @param string $TemplateId Template ID
     * @param array $Targets List of unsynced objects
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new PrometheusTemplateSyncTarget();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }
    }
}
