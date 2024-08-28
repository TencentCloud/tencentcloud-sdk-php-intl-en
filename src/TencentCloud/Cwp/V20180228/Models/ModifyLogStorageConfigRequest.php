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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogStorageConfig request structure.
 *
 * @method boolean getIsModifyPeriod() Obtain Whether to modify the validity period
 * @method void setIsModifyPeriod(boolean $IsModifyPeriod) Set Whether to modify the validity period
 * @method array getType() Obtain Storage type: string array
 * @method void setType(array $Type) Set Storage type: string array
 * @method integer getPeriod() Obtain Log retention days. The value 3640 indicates that the number of days is unlimited.
 * @method void setPeriod(integer $Period) Set Log retention days. The value 3640 indicates that the number of days is unlimited.
 */
class ModifyLogStorageConfigRequest extends AbstractModel
{
    /**
     * @var boolean Whether to modify the validity period
     */
    public $IsModifyPeriod;

    /**
     * @var array Storage type: string array
     */
    public $Type;

    /**
     * @var integer Log retention days. The value 3640 indicates that the number of days is unlimited.
     */
    public $Period;

    /**
     * @param boolean $IsModifyPeriod Whether to modify the validity period
     * @param array $Type Storage type: string array
     * @param integer $Period Log retention days. The value 3640 indicates that the number of days is unlimited.
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
        if (array_key_exists("IsModifyPeriod",$param) and $param["IsModifyPeriod"] !== null) {
            $this->IsModifyPeriod = $param["IsModifyPeriod"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
