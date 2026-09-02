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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced mirror conditional matching (one and only one of the three match strings is non-empty)
 *
 * @method string getImageIDMatchString() Obtain <p>Image ID match string (select one of the three, one and only one can be non-empty)</p>
 * @method void setImageIDMatchString(string $ImageIDMatchString) Set <p>Image ID match string (select one of the three, one and only one can be non-empty)</p>
 * @method string getImageNameMatchString() Obtain <p>Image name match string (choose one of three, one and only one is non-empty)</p>
 * @method void setImageNameMatchString(string $ImageNameMatchString) Set <p>Image name match string (choose one of three, one and only one is non-empty)</p>
 * @method string getImageAddressMatchString() Obtain <p>Image address match string (Select one of the three. One and only one is non-empty)</p>
 * @method void setImageAddressMatchString(string $ImageAddressMatchString) Set <p>Image address match string (Select one of the three. One and only one is non-empty)</p>
 * @method string getMatchType() Obtain <p>Match condition. Value: EQUALS-equal to/NOT_EQUALS-not equal to/STARTS_WITH-starting with/NOT_STARTS_WITH-not starting with/ENDS_WITH-ending with/NOT_ENDS_WITH-not ending with/CONTAINS-containing/NOT_CONTAINS-excluding</p>
 * @method void setMatchType(string $MatchType) Set <p>Match condition. Value: EQUALS-equal to/NOT_EQUALS-not equal to/STARTS_WITH-starting with/NOT_STARTS_WITH-not starting with/ENDS_WITH-ending with/NOT_ENDS_WITH-not ending with/CONTAINS-containing/NOT_CONTAINS-excluding</p>
 */
class ConditionMatch extends AbstractModel
{
    /**
     * @var string <p>Image ID match string (select one of the three, one and only one can be non-empty)</p>
     */
    public $ImageIDMatchString;

    /**
     * @var string <p>Image name match string (choose one of three, one and only one is non-empty)</p>
     */
    public $ImageNameMatchString;

    /**
     * @var string <p>Image address match string (Select one of the three. One and only one is non-empty)</p>
     */
    public $ImageAddressMatchString;

    /**
     * @var string <p>Match condition. Value: EQUALS-equal to/NOT_EQUALS-not equal to/STARTS_WITH-starting with/NOT_STARTS_WITH-not starting with/ENDS_WITH-ending with/NOT_ENDS_WITH-not ending with/CONTAINS-containing/NOT_CONTAINS-excluding</p>
     */
    public $MatchType;

    /**
     * @param string $ImageIDMatchString <p>Image ID match string (select one of the three, one and only one can be non-empty)</p>
     * @param string $ImageNameMatchString <p>Image name match string (choose one of three, one and only one is non-empty)</p>
     * @param string $ImageAddressMatchString <p>Image address match string (Select one of the three. One and only one is non-empty)</p>
     * @param string $MatchType <p>Match condition. Value: EQUALS-equal to/NOT_EQUALS-not equal to/STARTS_WITH-starting with/NOT_STARTS_WITH-not starting with/ENDS_WITH-ending with/NOT_ENDS_WITH-not ending with/CONTAINS-containing/NOT_CONTAINS-excluding</p>
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
        if (array_key_exists("ImageIDMatchString",$param) and $param["ImageIDMatchString"] !== null) {
            $this->ImageIDMatchString = $param["ImageIDMatchString"];
        }

        if (array_key_exists("ImageNameMatchString",$param) and $param["ImageNameMatchString"] !== null) {
            $this->ImageNameMatchString = $param["ImageNameMatchString"];
        }

        if (array_key_exists("ImageAddressMatchString",$param) and $param["ImageAddressMatchString"] !== null) {
            $this->ImageAddressMatchString = $param["ImageAddressMatchString"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }
    }
}
