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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdBreakSetting
 *
 * @method string getFormat() Obtain Advertising type, currently supports L-SQUEEZE
 * @method void setFormat(string $Format) Set Advertising type, currently supports L-SQUEEZE
 * @method integer getDuration() Obtain Duration, in milliseconds, requires 1000<duration<=600000. The current accuracy is seconds, which is a multiple of 1000
 * @method void setDuration(integer $Duration) Set Duration, in milliseconds, requires 1000<duration<=600000. The current accuracy is seconds, which is a multiple of 1000
 * @method LSqueezeSetting getLSqueezeSetting() Obtain L-type compression recovery configuration
 * @method void setLSqueezeSetting(LSqueezeSetting $LSqueezeSetting) Set L-type compression recovery configuration
 * @method string getAdSource() Obtain AdSource type, supports UPLOAD_CREATIVES
 * @method void setAdSource(string $AdSource) Set AdSource type, supports UPLOAD_CREATIVES
 */
class AdBreakSetting extends AbstractModel
{
    /**
     * @var string Advertising type, currently supports L-SQUEEZE
     */
    public $Format;

    /**
     * @var integer Duration, in milliseconds, requires 1000<duration<=600000. The current accuracy is seconds, which is a multiple of 1000
     */
    public $Duration;

    /**
     * @var LSqueezeSetting L-type compression recovery configuration
     */
    public $LSqueezeSetting;

    /**
     * @var string AdSource type, supports UPLOAD_CREATIVES
     */
    public $AdSource;

    /**
     * @param string $Format Advertising type, currently supports L-SQUEEZE
     * @param integer $Duration Duration, in milliseconds, requires 1000<duration<=600000. The current accuracy is seconds, which is a multiple of 1000
     * @param LSqueezeSetting $LSqueezeSetting L-type compression recovery configuration
     * @param string $AdSource AdSource type, supports UPLOAD_CREATIVES
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("LSqueezeSetting",$param) and $param["LSqueezeSetting"] !== null) {
            $this->LSqueezeSetting = new LSqueezeSetting();
            $this->LSqueezeSetting->deserialize($param["LSqueezeSetting"]);
        }

        if (array_key_exists("AdSource",$param) and $param["AdSource"] !== null) {
            $this->AdSource = $param["AdSource"];
        }
    }
}
