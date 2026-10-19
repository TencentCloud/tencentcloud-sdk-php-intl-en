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
 * cos bucket details
 *
 * @method integer getAppId() Obtain App ID information
 * @method void setAppId(integer $AppId) Set App ID information
 * @method string getBucketName() Obtain Bucket name.
 * @method void setBucketName(string $BucketName) Set Bucket name.
 * @method string getBucketRegion() Obtain Region information
 * @method void setBucketRegion(string $BucketRegion) Set Region information
 * @method string getBucketRegionCode() Obtain Region code value
 * @method void setBucketRegionCode(string $BucketRegionCode) Set Region code value
 * @method string getBucketMarker() Obtain Remarks.
 * @method void setBucketMarker(string $BucketMarker) Set Remarks.
 */
class CosBucketInfo extends AbstractModel
{
    /**
     * @var integer App ID information
     */
    public $AppId;

    /**
     * @var string Bucket name.
     */
    public $BucketName;

    /**
     * @var string Region information
     */
    public $BucketRegion;

    /**
     * @var string Region code value
     */
    public $BucketRegionCode;

    /**
     * @var string Remarks.
     */
    public $BucketMarker;

    /**
     * @param integer $AppId App ID information
     * @param string $BucketName Bucket name.
     * @param string $BucketRegion Region information
     * @param string $BucketRegionCode Region code value
     * @param string $BucketMarker Remarks.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketRegionCode",$param) and $param["BucketRegionCode"] !== null) {
            $this->BucketRegionCode = $param["BucketRegionCode"];
        }

        if (array_key_exists("BucketMarker",$param) and $param["BucketMarker"] !== null) {
            $this->BucketMarker = $param["BucketMarker"];
        }
    }
}
