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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query the output RIST pull stream configuration message.
 *
 * @method string getMode() Obtain RIST mode. Valid values: `LISTENER`, `CALLER`. Default value: `LISTENER`.
 * @method void setMode(string $Mode) Set RIST mode. Valid values: `LISTENER`, `CALLER`. Default value: `LISTENER`.
 * @method string getProfile() Obtain RIST configuration solution. Options: [MAIN|SIMPLE]. Default: MAIN.
 * @method void setProfile(string $Profile) Set RIST configuration solution. Options: [MAIN|SIMPLE]. Default: MAIN.
 * @method integer getBuffer() Obtain RIST buffer size in milliseconds. Minimum value: 50 ms. Maximum value: 5000 ms. Default value: 120.
 * @method void setBuffer(integer $Buffer) Set RIST buffer size in milliseconds. Minimum value: 50 ms. Maximum value: 5000 ms. Default value: 120.
 * @method array getSourceAddresses() Obtain Server listening address, used when the RIST mode is LISTENER.
 * @method void setSourceAddresses(array $SourceAddresses) Set Server listening address, used when the RIST mode is LISTENER.
 */
class DescribeOutputRISTSettings extends AbstractModel
{
    /**
     * @var string RIST mode. Valid values: `LISTENER`, `CALLER`. Default value: `LISTENER`.
     */
    public $Mode;

    /**
     * @var string RIST configuration solution. Options: [MAIN|SIMPLE]. Default: MAIN.
     */
    public $Profile;

    /**
     * @var integer RIST buffer size in milliseconds. Minimum value: 50 ms. Maximum value: 5000 ms. Default value: 120.
     */
    public $Buffer;

    /**
     * @var array Server listening address, used when the RIST mode is LISTENER.
     */
    public $SourceAddresses;

    /**
     * @param string $Mode RIST mode. Valid values: `LISTENER`, `CALLER`. Default value: `LISTENER`.
     * @param string $Profile RIST configuration solution. Options: [MAIN|SIMPLE]. Default: MAIN.
     * @param integer $Buffer RIST buffer size in milliseconds. Minimum value: 50 ms. Maximum value: 5000 ms. Default value: 120.
     * @param array $SourceAddresses Server listening address, used when the RIST mode is LISTENER.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Buffer",$param) and $param["Buffer"] !== null) {
            $this->Buffer = $param["Buffer"];
        }

        if (array_key_exists("SourceAddresses",$param) and $param["SourceAddresses"] !== null) {
            $this->SourceAddresses = [];
            foreach ($param["SourceAddresses"] as $key => $value){
                $obj = new OutputRISTSourceAddressResp();
                $obj->deserialize($value);
                array_push($this->SourceAddresses, $obj);
            }
        }
    }
}
