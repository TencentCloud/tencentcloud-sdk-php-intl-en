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
 * ModifyLicenseUnBinds request structure.
 *
 * @method string getResourceId() Obtain <p>Resource ID</p>
 * @method void setResourceId(string $ResourceId) Set <p>Resource ID</p>
 * @method integer getLicenseType() Obtain <p>Authorization type</p><p>Enumeration values:</p><ul><li>1: Pro Edition - monthly subscription</li><li>2: Ultimate Edition - monthly subscription</li></ul>
 * @method void setLicenseType(integer $LicenseType) Set <p>Authorization type</p><p>Enumeration values:</p><ul><li>1: Pro Edition - monthly subscription</li><li>2: Ultimate Edition - monthly subscription</li></ul>
 * @method boolean getIsAll() Obtain <p>Whether all machines (when the number of all machines exceeds the available licenses in the current order, extra machines will be skipped)</p>
 * @method void setIsAll(boolean $IsAll) Set <p>Whether all machines (when the number of all machines exceeds the available licenses in the current order, extra machines will be skipped)</p>
 * @method array getQuuidList() Obtain <p>List of QUUIDs of machines to be bound. Required when IsAll = false; otherwise, ignore the parameter.<br>Maximum length: 100</p>
 * @method void setQuuidList(array $QuuidList) Set <p>List of QUUIDs of machines to be bound. Required when IsAll = false; otherwise, ignore the parameter.<br>Maximum length: 100</p>
 */
class ModifyLicenseUnBindsRequest extends AbstractModel
{
    /**
     * @var string <p>Resource ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>Authorization type</p><p>Enumeration values:</p><ul><li>1: Pro Edition - monthly subscription</li><li>2: Ultimate Edition - monthly subscription</li></ul>
     */
    public $LicenseType;

    /**
     * @var boolean <p>Whether all machines (when the number of all machines exceeds the available licenses in the current order, extra machines will be skipped)</p>
     */
    public $IsAll;

    /**
     * @var array <p>List of QUUIDs of machines to be bound. Required when IsAll = false; otherwise, ignore the parameter.<br>Maximum length: 100</p>
     */
    public $QuuidList;

    /**
     * @param string $ResourceId <p>Resource ID</p>
     * @param integer $LicenseType <p>Authorization type</p><p>Enumeration values:</p><ul><li>1: Pro Edition - monthly subscription</li><li>2: Ultimate Edition - monthly subscription</li></ul>
     * @param boolean $IsAll <p>Whether all machines (when the number of all machines exceeds the available licenses in the current order, extra machines will be skipped)</p>
     * @param array $QuuidList <p>List of QUUIDs of machines to be bound. Required when IsAll = false; otherwise, ignore the parameter.<br>Maximum length: 100</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }
    }
}
