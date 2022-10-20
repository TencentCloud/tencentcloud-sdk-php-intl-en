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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAlarmConfig request structure.
 *
 * @method string getServiceType() Obtain The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
 * @method void setServiceType(string $ServiceType) Set The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method array getEntityList() Obtain The list of protection entities.
 * @method void setEntityList(array $EntityList) Set The list of protection entities.
 * @method integer getThreshold() Obtain The alarm threshold. When no value or 0 is passed, the default alarm threshold will be used.
 * @method void setThreshold(integer $Threshold) Set The alarm threshold. When no value or 0 is passed, the default alarm threshold will be used.
 * @method boolean getIsDefault() Obtain Whether the default alarm threshold is used.
 * @method void setIsDefault(boolean $IsDefault) Set Whether the default alarm threshold is used.
 */
class ModifyAlarmConfigRequest extends AbstractModel
{
    /**
     * @var string The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
     */
    public $ServiceType;

    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var array The list of protection entities.
     */
    public $EntityList;

    /**
     * @var integer The alarm threshold. When no value or 0 is passed, the default alarm threshold will be used.
     */
    public $Threshold;

    /**
     * @var boolean Whether the default alarm threshold is used.
     */
    public $IsDefault;

    /**
     * @param string $ServiceType The alarm service type. Values:
<li>`ddos`: DDoS alarm service.</li>
     * @param string $ZoneId The site ID.
     * @param array $EntityList The list of protection entities.
     * @param integer $Threshold The alarm threshold. When no value or 0 is passed, the default alarm threshold will be used.
     * @param boolean $IsDefault Whether the default alarm threshold is used.
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("EntityList",$param) and $param["EntityList"] !== null) {
            $this->EntityList = $param["EntityList"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
