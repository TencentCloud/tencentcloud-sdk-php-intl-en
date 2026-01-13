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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the consumer group configuration information.
 *
 * @method string getGroupName() Obtain Consumer group name. It can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the API [DescribeSourceClusterGroupList](https://www.tencentcloud.com/document/api/1493/118006?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupName(string $GroupName) Set Consumer group name. It can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the API [DescribeSourceClusterGroupList](https://www.tencentcloud.com/document/api/1493/118006?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemark() Obtain Remarks

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getImported() Obtain Specifies whether it has been imported. it is unavailable when used as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImported(boolean $Imported) Set Specifies whether it has been imported. it is unavailable when used as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Namespace, valid for 4.x clusters only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace, valid for 4.x clusters only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImportStatus() Obtain Import status.
Unknown. specifies an unknown status.
Success.
Failure.
AlreadyExists. specifies the resource already exists.

Used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImportStatus(string $ImportStatus) Set Import status.
Unknown. specifies an unknown status.
Success.
Failure.
AlreadyExists. specifies the resource already exists.

Used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceV4() Obtain Namespace of 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceV4(string $NamespaceV4) Set Namespace of 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupNameV4() Obtain Consumer group name for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGroupNameV4(string $GroupNameV4) Set Consumer group name for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullNamespaceV4() Obtain Complete namespace for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullNamespaceV4(string $FullNamespaceV4) Set Complete namespace for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getConsumeMessageOrderly() Obtain Specifies whether it is ordered delivery. valid value: 5.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) Set Specifies whether it is ordered delivery. valid value: 5.0.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SourceClusterGroupConfig extends AbstractModel
{
    /**
     * @var string Consumer group name. It can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the API [DescribeSourceClusterGroupList](https://www.tencentcloud.com/document/api/1493/118006?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupName;

    /**
     * @var string Remarks

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var boolean Specifies whether it has been imported. it is unavailable when used as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Imported;

    /**
     * @var string Namespace, valid for 4.x clusters only.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Import status.
Unknown. specifies an unknown status.
Success.
Failure.
AlreadyExists. specifies the resource already exists.

Used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImportStatus;

    /**
     * @var string Namespace of 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceV4;

    /**
     * @var string Consumer group name for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GroupNameV4;

    /**
     * @var string Complete namespace for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullNamespaceV4;

    /**
     * @var boolean Specifies whether it is ordered delivery. valid value: 5.0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumeMessageOrderly;

    /**
     * @param string $GroupName Consumer group name. It can be obtained from [SourceClusterGroupConfig](https://www.tencentcloud.com/document/api/1493/96031?from_cn_redirect=1#SourceClusterGroupConfig) returned by the API [DescribeSourceClusterGroupList](https://www.tencentcloud.com/document/api/1493/118006?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remark Remarks

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Imported Specifies whether it has been imported. it is unavailable when used as an input parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Namespace, valid for 4.x clusters only.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImportStatus Import status.
Unknown. specifies an unknown status.
Success.
Failure.
AlreadyExists. specifies the resource already exists.

Used as an output parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceV4 Namespace of 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupNameV4 Consumer group name for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullNamespaceV4 Complete namespace for version 4.x. output usage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ConsumeMessageOrderly Specifies whether it is ordered delivery. valid value: 5.0.
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Imported",$param) and $param["Imported"] !== null) {
            $this->Imported = $param["Imported"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImportStatus",$param) and $param["ImportStatus"] !== null) {
            $this->ImportStatus = $param["ImportStatus"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("GroupNameV4",$param) and $param["GroupNameV4"] !== null) {
            $this->GroupNameV4 = $param["GroupNameV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }
    }
}
