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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAddressUnsubscribeConfig request structure.
 *
 * @method string getAddress() Obtain Sender address.
 * @method void setAddress(string $Address) Set Sender address.
 * @method string getUnsubscribeConfig() Obtain Unsubscribe link option. 0: Do not add unsubscribe link; 1: English 2: Simplified Chinese; 3: Traditional Chinese; 4: Spanish; 5: French; 6: German; 7: Japanese; 8: Korean; 9: Arabic; 10: Thai
 * @method void setUnsubscribeConfig(string $UnsubscribeConfig) Set Unsubscribe link option. 0: Do not add unsubscribe link; 1: English 2: Simplified Chinese; 3: Traditional Chinese; 4: Spanish; 5: French; 6: German; 7: Japanese; 8: Korean; 9: Arabic; 10: Thai
 * @method integer getStatus() Obtain 0: disable; 1: enable.
 * @method void setStatus(integer $Status) Set 0: disable; 1: enable.
 */
class UpdateAddressUnsubscribeConfigRequest extends AbstractModel
{
    /**
     * @var string Sender address.
     */
    public $Address;

    /**
     * @var string Unsubscribe link option. 0: Do not add unsubscribe link; 1: English 2: Simplified Chinese; 3: Traditional Chinese; 4: Spanish; 5: French; 6: German; 7: Japanese; 8: Korean; 9: Arabic; 10: Thai
     */
    public $UnsubscribeConfig;

    /**
     * @var integer 0: disable; 1: enable.
     */
    public $Status;

    /**
     * @param string $Address Sender address.
     * @param string $UnsubscribeConfig Unsubscribe link option. 0: Do not add unsubscribe link; 1: English 2: Simplified Chinese; 3: Traditional Chinese; 4: Spanish; 5: French; 6: German; 7: Japanese; 8: Korean; 9: Arabic; 10: Thai
     * @param integer $Status 0: disable; 1: enable.
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UnsubscribeConfig",$param) and $param["UnsubscribeConfig"] !== null) {
            $this->UnsubscribeConfig = $param["UnsubscribeConfig"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
