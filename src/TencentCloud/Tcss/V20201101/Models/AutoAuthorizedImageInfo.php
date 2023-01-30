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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the automatic image licensing
 *
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getAuthorizedTime() Obtain Licensing time
 * @method void setAuthorizedTime(string $AuthorizedTime) Set Licensing time
 * @method string getStatus() Obtain Licensing result. Valid values: `SUCCESS` (success); `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
 * @method void setStatus(string $Status) Set Licensing result. Valid values: `SUCCESS` (success); `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
 * @method integer getIsAuthorized() Obtain Whether it is licensed. Valid values: `1` (yes); `0` (no).
 * @method void setIsAuthorized(integer $IsAuthorized) Set Whether it is licensed. Valid values: `1` (yes); `0` (no).
 */
class AutoAuthorizedImageInfo extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Licensing time
     */
    public $AuthorizedTime;

    /**
     * @var string Licensing result. Valid values: `SUCCESS` (success); `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
     */
    public $Status;

    /**
     * @var integer Whether it is licensed. Valid values: `1` (yes); `0` (no).
     */
    public $IsAuthorized;

    /**
     * @param string $ImageId Image ID
     * @param string $ImageName Image name
     * @param string $AuthorizedTime Licensing time
     * @param string $Status Licensing result. Valid values: `SUCCESS` (success); `REACH_LIMIT` (reaching the upper limit on licenses); `LICENSE_INSUFFICIENT` (insufficient licenses).
     * @param integer $IsAuthorized Whether it is licensed. Valid values: `1` (yes); `0` (no).
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("AuthorizedTime",$param) and $param["AuthorizedTime"] !== null) {
            $this->AuthorizedTime = $param["AuthorizedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }
    }
}
