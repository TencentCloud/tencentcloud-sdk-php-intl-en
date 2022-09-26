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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of layer-4 forwarding rules
 *
 * @method string getSource() Obtain IP or domain name for forwarding.
 * @method void setSource(string $Source) Set IP or domain name for forwarding.
 * @method integer getWeight() Obtain Weight. Value range: [0,100].
 * @method void setWeight(integer $Weight) Set Weight. Value range: [0,100].
 * @method integer getPort() Obtain 8000
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set 8000
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBackup() Obtain Secondary origin server. `1`: secondary origin server; `0`: general origin server.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackup(integer $Backup) Set Secondary origin server. `1`: secondary origin server; `0`: general origin server.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class L4RuleSource extends AbstractModel
{
    /**
     * @var string IP or domain name for forwarding.
     */
    public $Source;

    /**
     * @var integer Weight. Value range: [0,100].
     */
    public $Weight;

    /**
     * @var integer 8000
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var integer Secondary origin server. `1`: secondary origin server; `0`: general origin server.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Backup;

    /**
     * @param string $Source IP or domain name for forwarding.
     * @param integer $Weight Weight. Value range: [0,100].
     * @param integer $Port 8000
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Backup Secondary origin server. `1`: secondary origin server; `0`: general origin server.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Backup",$param) and $param["Backup"] !== null) {
            $this->Backup = $param["Backup"];
        }
    }
}
