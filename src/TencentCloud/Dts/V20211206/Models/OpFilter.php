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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDL/DML Filter Rule
 *
 * @method array getOpTypes() Obtain DML allowlist
 * @method void setOpTypes(array $OpTypes) Set DML allowlist
 * @method array getDdlOptions() Obtain DDL allowlist
 * @method void setDdlOptions(array $DdlOptions) Set DDL allowlist
 */
class OpFilter extends AbstractModel
{
    /**
     * @var array DML allowlist
     */
    public $OpTypes;

    /**
     * @var array DDL allowlist
     */
    public $DdlOptions;

    /**
     * @param array $OpTypes DML allowlist
     * @param array $DdlOptions DDL allowlist
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
        if (array_key_exists("OpTypes",$param) and $param["OpTypes"] !== null) {
            $this->OpTypes = $param["OpTypes"];
        }

        if (array_key_exists("DdlOptions",$param) and $param["DdlOptions"] !== null) {
            $this->DdlOptions = [];
            foreach ($param["DdlOptions"] as $key => $value){
                $obj = new DdlOption();
                $obj->deserialize($value);
                array_push($this->DdlOptions, $obj);
            }
        }
    }
}
