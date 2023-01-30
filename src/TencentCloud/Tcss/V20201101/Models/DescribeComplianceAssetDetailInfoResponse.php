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
 * DescribeComplianceAssetDetailInfo response structure.
 *
 * @method ComplianceAssetDetailInfo getAssetDetailInfo() Obtain Asset details
 * @method void setAssetDetailInfo(ComplianceAssetDetailInfo $AssetDetailInfo) Set Asset details
 * @method ComplianceContainerDetailInfo getContainerDetailInfo() Obtain This field is returned when the asset is a container.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContainerDetailInfo(ComplianceContainerDetailInfo $ContainerDetailInfo) Set This field is returned when the asset is a container.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComplianceImageDetailInfo getImageDetailInfo() Obtain This field is returned when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageDetailInfo(ComplianceImageDetailInfo $ImageDetailInfo) Set This field is returned when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComplianceHostDetailInfo getHostDetailInfo() Obtain This field is returned when the asset is a server.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostDetailInfo(ComplianceHostDetailInfo $HostDetailInfo) Set This field is returned when the asset is a server.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ComplianceK8SDetailInfo getK8SDetailInfo() Obtain This field is returned when the asset is a K8s asset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setK8SDetailInfo(ComplianceK8SDetailInfo $K8SDetailInfo) Set This field is returned when the asset is a K8s asset.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeComplianceAssetDetailInfoResponse extends AbstractModel
{
    /**
     * @var ComplianceAssetDetailInfo Asset details
     */
    public $AssetDetailInfo;

    /**
     * @var ComplianceContainerDetailInfo This field is returned when the asset is a container.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ContainerDetailInfo;

    /**
     * @var ComplianceImageDetailInfo This field is returned when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageDetailInfo;

    /**
     * @var ComplianceHostDetailInfo This field is returned when the asset is a server.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostDetailInfo;

    /**
     * @var ComplianceK8SDetailInfo This field is returned when the asset is a K8s asset.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $K8SDetailInfo;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param ComplianceAssetDetailInfo $AssetDetailInfo Asset details
     * @param ComplianceContainerDetailInfo $ContainerDetailInfo This field is returned when the asset is a container.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComplianceImageDetailInfo $ImageDetailInfo This field is returned when the asset is an image.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComplianceHostDetailInfo $HostDetailInfo This field is returned when the asset is a server.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ComplianceK8SDetailInfo $K8SDetailInfo This field is returned when the asset is a K8s asset.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AssetDetailInfo",$param) and $param["AssetDetailInfo"] !== null) {
            $this->AssetDetailInfo = new ComplianceAssetDetailInfo();
            $this->AssetDetailInfo->deserialize($param["AssetDetailInfo"]);
        }

        if (array_key_exists("ContainerDetailInfo",$param) and $param["ContainerDetailInfo"] !== null) {
            $this->ContainerDetailInfo = new ComplianceContainerDetailInfo();
            $this->ContainerDetailInfo->deserialize($param["ContainerDetailInfo"]);
        }

        if (array_key_exists("ImageDetailInfo",$param) and $param["ImageDetailInfo"] !== null) {
            $this->ImageDetailInfo = new ComplianceImageDetailInfo();
            $this->ImageDetailInfo->deserialize($param["ImageDetailInfo"]);
        }

        if (array_key_exists("HostDetailInfo",$param) and $param["HostDetailInfo"] !== null) {
            $this->HostDetailInfo = new ComplianceHostDetailInfo();
            $this->HostDetailInfo->deserialize($param["HostDetailInfo"]);
        }

        if (array_key_exists("K8SDetailInfo",$param) and $param["K8SDetailInfo"] !== null) {
            $this->K8SDetailInfo = new ComplianceK8SDetailInfo();
            $this->K8SDetailInfo->deserialize($param["K8SDetailInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
