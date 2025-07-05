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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApply request structure.
 *
 * @method array getApplyStatus() Obtain Application status
 * @method void setApplyStatus(array $ApplyStatus) Set Application status
 */
class UpdateApplyRequest extends AbstractModel
{
    /**
     * @var array Application status
     */
    public $ApplyStatus;

    /**
     * @param array $ApplyStatus Application status
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
        if (array_key_exists("ApplyStatus",$param) and $param["ApplyStatus"] !== null) {
            $this->ApplyStatus = [];
            foreach ($param["ApplyStatus"] as $key => $value){
                $obj = new ApplyStatus();
                $obj->deserialize($value);
                array_push($this->ApplyStatus, $obj);
            }
        }
    }
}
