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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation details.
 *
 * @method array getOldInfo() Obtain Original configuration message of the instance
 * @method void setOldInfo(array $OldInfo) Set Original configuration message of the instance
 * @method array getNewInfo() Obtain Configuration message after the instance update
 * @method void setNewInfo(array $NewInfo) Set Configuration message after the instance update
 */
class OperationDetail extends AbstractModel
{
    /**
     * @var array Original configuration message of the instance
     */
    public $OldInfo;

    /**
     * @var array Configuration message after the instance update
     */
    public $NewInfo;

    /**
     * @param array $OldInfo Original configuration message of the instance
     * @param array $NewInfo Configuration message after the instance update
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
        if (array_key_exists("OldInfo",$param) and $param["OldInfo"] !== null) {
            $this->OldInfo = [];
            foreach ($param["OldInfo"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->OldInfo, $obj);
            }
        }

        if (array_key_exists("NewInfo",$param) and $param["NewInfo"] !== null) {
            $this->NewInfo = [];
            foreach ($param["NewInfo"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->NewInfo, $obj);
            }
        }
    }
}
