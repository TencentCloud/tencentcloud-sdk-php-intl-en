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
 * Watermark configuration
 *
 * @method integer getOffset() Obtain Watermark offset. Value range: [0, 100).
 * @method void setOffset(integer $Offset) Set Watermark offset. Value range: [0, 100).
 * @method integer getOpenStatus() Obtain Start status. Valid values:
`0`: manual start
`1`: instant start
]
 * @method void setOpenStatus(integer $OpenStatus) Set Start status. Valid values:
`0`: manual start
`1`: instant start
]
 * @method array getListeners() Obtain List of forwarding listeners configured
 * @method void setListeners(array $Listeners) Set List of forwarding listeners configured
 * @method array getKeys() Obtain A list of watermark keys is generated after a watermark is added successfully. Each watermark can have up to 2 keys. When there is only one valid key, it cannot be deleted.
 * @method void setKeys(array $Keys) Set A list of watermark keys is generated after a watermark is added successfully. Each watermark can have up to 2 keys. When there is only one valid key, it cannot be deleted.
 * @method string getVerify() Obtain Watermark checking mode, which can be:
`checkall`: normal mode
`shortfpcheckall`: compact mode
]
 * @method void setVerify(string $Verify) Set Watermark checking mode, which can be:
`checkall`: normal mode
`shortfpcheckall`: compact mode
]
 * @method integer getCloudSdkProxy() Obtain Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudSdkProxy(integer $CloudSdkProxy) Set Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class WaterPrintConfig extends AbstractModel
{
    /**
     * @var integer Watermark offset. Value range: [0, 100).
     */
    public $Offset;

    /**
     * @var integer Start status. Valid values:
`0`: manual start
`1`: instant start
]
     */
    public $OpenStatus;

    /**
     * @var array List of forwarding listeners configured
     */
    public $Listeners;

    /**
     * @var array A list of watermark keys is generated after a watermark is added successfully. Each watermark can have up to 2 keys. When there is only one valid key, it cannot be deleted.
     */
    public $Keys;

    /**
     * @var string Watermark checking mode, which can be:
`checkall`: normal mode
`shortfpcheckall`: compact mode
]
     */
    public $Verify;

    /**
     * @var integer Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudSdkProxy;

    /**
     * @param integer $Offset Watermark offset. Value range: [0, 100).
     * @param integer $OpenStatus Start status. Valid values:
`0`: manual start
`1`: instant start
]
     * @param array $Listeners List of forwarding listeners configured
     * @param array $Keys A list of watermark keys is generated after a watermark is added successfully. Each watermark can have up to 2 keys. When there is only one valid key, it cannot be deleted.
     * @param string $Verify Watermark checking mode, which can be:
`checkall`: normal mode
`shortfpcheckall`: compact mode
]
     * @param integer $CloudSdkProxy Whether to enable proxy. Values: `1` (Enable proxy and ignore IP+port verification), `0` (Do not enable proxy and IP+port verification is required)
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("Listeners",$param) and $param["Listeners"] !== null) {
            $this->Listeners = [];
            foreach ($param["Listeners"] as $key => $value){
                $obj = new ForwardListener();
                $obj->deserialize($value);
                array_push($this->Listeners, $obj);
            }
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new WaterPrintKey();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("Verify",$param) and $param["Verify"] !== null) {
            $this->Verify = $param["Verify"];
        }

        if (array_key_exists("CloudSdkProxy",$param) and $param["CloudSdkProxy"] !== null) {
            $this->CloudSdkProxy = $param["CloudSdkProxy"];
        }
    }
}
