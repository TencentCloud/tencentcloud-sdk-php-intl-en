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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Endpoint information.
 *
 * @method string getEndPointId() Obtain Endpoint ID.
 * @method void setEndPointId(string $EndPointId) Set Endpoint ID.
 * @method string getEndPointName() Obtain Endpoint name.
 * @method void setEndPointName(string $EndPointName) Set Endpoint name.
 * @method string getEndPointServiceId() Obtain Endpoint service ID.
 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID.
 * @method array getEndPointVipSet() Obtain VIP list of the endpoint.
 * @method void setEndPointVipSet(array $EndPointVipSet) Set VIP list of the endpoint.
 * @method string getRegionCode() Obtain ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionCode(string $RegionCode) Set ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag key-value pair collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag key-value pair collection.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EndPointInfo extends AbstractModel
{
    /**
     * @var string Endpoint ID.
     */
    public $EndPointId;

    /**
     * @var string Endpoint name.
     */
    public $EndPointName;

    /**
     * @var string Endpoint service ID.
     */
    public $EndPointServiceId;

    /**
     * @var array VIP list of the endpoint.
     */
    public $EndPointVipSet;

    /**
     * @var string ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionCode;

    /**
     * @var array Tag key-value pair collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @param string $EndPointId Endpoint ID.
     * @param string $EndPointName Endpoint name.
     * @param string $EndPointServiceId Endpoint service ID.
     * @param array $EndPointVipSet VIP list of the endpoint.
     * @param string $RegionCode ap-guangzhou
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag key-value pair collection.
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVipSet",$param) and $param["EndPointVipSet"] !== null) {
            $this->EndPointVipSet = $param["EndPointVipSet"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
