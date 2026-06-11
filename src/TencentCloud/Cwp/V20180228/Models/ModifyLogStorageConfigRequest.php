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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLogStorageConfig request structure.
 *
 * @method boolean getIsModifyPeriod() Obtain Whether to modify the validity period (deprecated).
 * @method void setIsModifyPeriod(boolean $IsModifyPeriod) Set Whether to modify the validity period (deprecated).
 * @method array getType() Obtain Storage type: string array
 * @method void setType(array $Type) Set Storage type: string array
 * @method integer getPeriod() Obtain Log retention time. The value 3640 indicates that the time is unlimited.
 * @method void setPeriod(integer $Period) Set Log retention time. The value 3640 indicates that the time is unlimited.
 * @method string getGranularity() Obtain Log storage duration unit: year/month/day
 * @method void setGranularity(string $Granularity) Set Log storage duration unit: year/month/day
 * @method string getMsgLanguage() Obtain Language type
 * @method void setMsgLanguage(string $MsgLanguage) Set Language type
 */
class ModifyLogStorageConfigRequest extends AbstractModel
{
    /**
     * @var boolean Whether to modify the validity period (deprecated).
     */
    public $IsModifyPeriod;

    /**
     * @var array Storage type: string array
     */
    public $Type;

    /**
     * @var integer Log retention time. The value 3640 indicates that the time is unlimited.
     */
    public $Period;

    /**
     * @var string Log storage duration unit: year/month/day
     */
    public $Granularity;

    /**
     * @var string Language type
     */
    public $MsgLanguage;

    /**
     * @param boolean $IsModifyPeriod Whether to modify the validity period (deprecated).
     * @param array $Type Storage type: string array
     * @param integer $Period Log retention time. The value 3640 indicates that the time is unlimited.
     * @param string $Granularity Log storage duration unit: year/month/day
     * @param string $MsgLanguage Language type
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

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("MsgLanguage",$param) and $param["MsgLanguage"] !== null) {
            $this->MsgLanguage = $param["MsgLanguage"];
        }
    }
}
