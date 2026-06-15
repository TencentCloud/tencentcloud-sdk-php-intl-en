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
 * DeleteOnCallForms request structure.
 *
 * @method string getModule() Obtain The fixed value is monitor.
 * @method void setModule(string $Module) Set The fixed value is monitor.
 * @method array getOnCallFormIDs() Obtain ID of the on-call schedule to be deleted.
 * @method void setOnCallFormIDs(array $OnCallFormIDs) Set ID of the on-call schedule to be deleted.
 */
class DeleteOnCallFormsRequest extends AbstractModel
{
    /**
     * @var string The fixed value is monitor.
     */
    public $Module;

    /**
     * @var array ID of the on-call schedule to be deleted.
     */
    public $OnCallFormIDs;

    /**
     * @param string $Module The fixed value is monitor.
     * @param array $OnCallFormIDs ID of the on-call schedule to be deleted.
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("OnCallFormIDs",$param) and $param["OnCallFormIDs"] !== null) {
            $this->OnCallFormIDs = $param["OnCallFormIDs"];
        }
    }
}
