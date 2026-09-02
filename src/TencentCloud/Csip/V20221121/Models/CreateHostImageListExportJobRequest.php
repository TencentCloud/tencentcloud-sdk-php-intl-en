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
 * CreateHostImageListExportJob request structure.
 *
 * @method string getClusterCaMD5() Obtain <p>MD5 of the cluster CA certificate (32-bit hexadecimal, required)</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>MD5 of the cluster CA certificate (32-bit hexadecimal, required)</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method Filter getFilter() Obtain <p>Common ListFilter structure (including Filters array + ListFindOption pagination)<br>Supported filter fields: Host / ImageId / ImageName / HasRunningContainer</p>
 * @method void setFilter(Filter $Filter) Set <p>Common ListFilter structure (including Filters array + ListFindOption pagination)<br>Supported filter fields: Host / ImageId / ImageName / HasRunningContainer</p>
 * @method array getExportFields() Obtain <p>List of fields to export (all fields are exported if this parameter is not passed)<br>Enumeration values:<br>ImageId: image ID<br>ImageName: image name<br>ImageVersion: mirror version<br>ContainerCount: number of associated containers<br>HostCount: number of associated hosts<br>CreateTime: creation time<br>NickName: account nickname (automatically excluded in single account mode)<br>ScanStatus: scan status<br>LastScanTime: latest scan completion time<br>VulCountCritical: number of critical vulnerabilities<br>VulCountHigh: number of high vulnerabilities<br>VulCountMedium: number of medium vulnerabilities<br>VulCountLow: number of low vulnerabilities<br>VirusCountCritical: number of critical trojans<br>VirusCountHigh: number of high trojans<br>VirusCountMedium: number of medium trojans<br>VirusCountLow: number of low trojans<br>SensitiveCountCritical: number of critical sensitive data items<br>SensitiveCountHigh: number of high sensitive data items<br>SensitiveCountMedium: number of medium sensitive data items<br>SensitiveCountLow: number of low sensitive data items</p>
 * @method void setExportFields(array $ExportFields) Set <p>List of fields to export (all fields are exported if this parameter is not passed)<br>Enumeration values:<br>ImageId: image ID<br>ImageName: image name<br>ImageVersion: mirror version<br>ContainerCount: number of associated containers<br>HostCount: number of associated hosts<br>CreateTime: creation time<br>NickName: account nickname (automatically excluded in single account mode)<br>ScanStatus: scan status<br>LastScanTime: latest scan completion time<br>VulCountCritical: number of critical vulnerabilities<br>VulCountHigh: number of high vulnerabilities<br>VulCountMedium: number of medium vulnerabilities<br>VulCountLow: number of low vulnerabilities<br>VirusCountCritical: number of critical trojans<br>VirusCountHigh: number of high trojans<br>VirusCountMedium: number of medium trojans<br>VirusCountLow: number of low trojans<br>SensitiveCountCritical: number of critical sensitive data items<br>SensitiveCountHigh: number of high sensitive data items<br>SensitiveCountMedium: number of medium sensitive data items<br>SensitiveCountLow: number of low sensitive data items</p>
 */
class CreateHostImageListExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>MD5 of the cluster CA certificate (32-bit hexadecimal, required)</p>
     */
    public $ClusterCaMD5;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>Common ListFilter structure (including Filters array + ListFindOption pagination)<br>Supported filter fields: Host / ImageId / ImageName / HasRunningContainer</p>
     */
    public $Filter;

    /**
     * @var array <p>List of fields to export (all fields are exported if this parameter is not passed)<br>Enumeration values:<br>ImageId: image ID<br>ImageName: image name<br>ImageVersion: mirror version<br>ContainerCount: number of associated containers<br>HostCount: number of associated hosts<br>CreateTime: creation time<br>NickName: account nickname (automatically excluded in single account mode)<br>ScanStatus: scan status<br>LastScanTime: latest scan completion time<br>VulCountCritical: number of critical vulnerabilities<br>VulCountHigh: number of high vulnerabilities<br>VulCountMedium: number of medium vulnerabilities<br>VulCountLow: number of low vulnerabilities<br>VirusCountCritical: number of critical trojans<br>VirusCountHigh: number of high trojans<br>VirusCountMedium: number of medium trojans<br>VirusCountLow: number of low trojans<br>SensitiveCountCritical: number of critical sensitive data items<br>SensitiveCountHigh: number of high sensitive data items<br>SensitiveCountMedium: number of medium sensitive data items<br>SensitiveCountLow: number of low sensitive data items</p>
     */
    public $ExportFields;

    /**
     * @param string $ClusterCaMD5 <p>MD5 of the cluster CA certificate (32-bit hexadecimal, required)</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param Filter $Filter <p>Common ListFilter structure (including Filters array + ListFindOption pagination)<br>Supported filter fields: Host / ImageId / ImageName / HasRunningContainer</p>
     * @param array $ExportFields <p>List of fields to export (all fields are exported if this parameter is not passed)<br>Enumeration values:<br>ImageId: image ID<br>ImageName: image name<br>ImageVersion: mirror version<br>ContainerCount: number of associated containers<br>HostCount: number of associated hosts<br>CreateTime: creation time<br>NickName: account nickname (automatically excluded in single account mode)<br>ScanStatus: scan status<br>LastScanTime: latest scan completion time<br>VulCountCritical: number of critical vulnerabilities<br>VulCountHigh: number of high vulnerabilities<br>VulCountMedium: number of medium vulnerabilities<br>VulCountLow: number of low vulnerabilities<br>VirusCountCritical: number of critical trojans<br>VirusCountHigh: number of high trojans<br>VirusCountMedium: number of medium trojans<br>VirusCountLow: number of low trojans<br>SensitiveCountCritical: number of critical sensitive data items<br>SensitiveCountHigh: number of high sensitive data items<br>SensitiveCountMedium: number of medium sensitive data items<br>SensitiveCountLow: number of low sensitive data items</p>
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
        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ExportFields",$param) and $param["ExportFields"] !== null) {
            $this->ExportFields = $param["ExportFields"];
        }
    }
}
