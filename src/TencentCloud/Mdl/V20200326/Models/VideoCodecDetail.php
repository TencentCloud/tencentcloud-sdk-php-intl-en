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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Video codec additional configuration.
 *
 * @method string getProfile() Obtain The three image quality levels of h264 include: BASELINE, HIGH, and MAIN. The default option is MAIN.
 * @method void setProfile(string $Profile) Set The three image quality levels of h264 include: BASELINE, HIGH, and MAIN. The default option is MAIN.
 * @method string getLevel() Obtain Profile corresponding codec performance, options include: 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 2.3, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, 5.1, AUTO. The default option is AUTO.
 * @method void setLevel(string $Level) Set Profile corresponding codec performance, options include: 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 2.3, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, 5.1, AUTO. The default option is AUTO.
 * @method string getEntropyEncoding() Obtain Codecs include entropy coding and lossless coding, and options include: CABAC and CAVLC. The default option is CABAC. .
 * @method void setEntropyEncoding(string $EntropyEncoding) Set Codecs include entropy coding and lossless coding, and options include: CABAC and CAVLC. The default option is CABAC. .
 * @method string getAdaptiveQuantization() Obtain Mode, options include: AUTO, HIGH, HIGHER, LOW, MAX, MEDIUM, OFF. The default option is: AUTO. .
 * @method void setAdaptiveQuantization(string $AdaptiveQuantization) Set Mode, options include: AUTO, HIGH, HIGHER, LOW, MAX, MEDIUM, OFF. The default option is: AUTO. .
 * @method string getLookAheadRateControl() Obtain Analyze subsequent encoded frames in advance, options include: HIGH, LOW, MEDIUM. The default option is: MEDIUM. .
 * @method void setLookAheadRateControl(string $LookAheadRateControl) Set Analyze subsequent encoded frames in advance, options include: HIGH, LOW, MEDIUM. The default option is: MEDIUM. .
 */
class VideoCodecDetail extends AbstractModel
{
    /**
     * @var string The three image quality levels of h264 include: BASELINE, HIGH, and MAIN. The default option is MAIN.
     */
    public $Profile;

    /**
     * @var string Profile corresponding codec performance, options include: 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 2.3, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, 5.1, AUTO. The default option is AUTO.
     */
    public $Level;

    /**
     * @var string Codecs include entropy coding and lossless coding, and options include: CABAC and CAVLC. The default option is CABAC. .
     */
    public $EntropyEncoding;

    /**
     * @var string Mode, options include: AUTO, HIGH, HIGHER, LOW, MAX, MEDIUM, OFF. The default option is: AUTO. .
     */
    public $AdaptiveQuantization;

    /**
     * @var string Analyze subsequent encoded frames in advance, options include: HIGH, LOW, MEDIUM. The default option is: MEDIUM. .
     */
    public $LookAheadRateControl;

    /**
     * @param string $Profile The three image quality levels of h264 include: BASELINE, HIGH, and MAIN. The default option is MAIN.
     * @param string $Level Profile corresponding codec performance, options include: 1, 1.1, 1.2, 1.3, 2, 2.1, 2.2, 2.3, 3, 3.1, 3.2, 4, 4.1, 4.2, 5, 5.1, AUTO. The default option is AUTO.
     * @param string $EntropyEncoding Codecs include entropy coding and lossless coding, and options include: CABAC and CAVLC. The default option is CABAC. .
     * @param string $AdaptiveQuantization Mode, options include: AUTO, HIGH, HIGHER, LOW, MAX, MEDIUM, OFF. The default option is: AUTO. .
     * @param string $LookAheadRateControl Analyze subsequent encoded frames in advance, options include: HIGH, LOW, MEDIUM. The default option is: MEDIUM. .
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
        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("EntropyEncoding",$param) and $param["EntropyEncoding"] !== null) {
            $this->EntropyEncoding = $param["EntropyEncoding"];
        }

        if (array_key_exists("AdaptiveQuantization",$param) and $param["AdaptiveQuantization"] !== null) {
            $this->AdaptiveQuantization = $param["AdaptiveQuantization"];
        }

        if (array_key_exists("LookAheadRateControl",$param) and $param["LookAheadRateControl"] !== null) {
            $this->LookAheadRateControl = $param["LookAheadRateControl"];
        }
    }
}
