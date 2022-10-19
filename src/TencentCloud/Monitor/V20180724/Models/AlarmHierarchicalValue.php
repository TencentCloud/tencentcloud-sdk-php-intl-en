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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getRemind() Obtain 
 * @method void setRemind(string $Remind) Set 
 * @method string getWarn() Obtain 
 * @method void setWarn(string $Warn) Set 
 * @method string getSerious() Obtain 
 * @method void setSerious(string $Serious) Set 
 */
class AlarmHierarchicalValue extends AbstractModel
{
    /**
     * @var string 
     */
    public $Remind;

    /**
     * @var string 
     */
    public $Warn;

    /**
     * @var string 
     */
    public $Serious;

    /**
     * @param string $Remind 
     * @param string $Warn 
     * @param string $Serious 
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
        if (array_key_exists("Remind",$param) and $param["Remind"] !== null) {
            $this->Remind = $param["Remind"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Serious",$param) and $param["Serious"] !== null) {
            $this->Serious = $param["Serious"];
        }
    }
}
