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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of the origin.
 *
 * @method string getOriginType() Obtain Origin server type, with values:
<li>IP_DOMAIN: IPv4, IPv6, or domain name type origin server;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWS_S3: AWS S3 origin server;</li>
<li>ORIGIN_GROUP: origin server group type origin server;</li>
 <li>VOD: Video on Demand;</li>
<li>SPACE: origin server uninstallation. Currently only available to the allowlist;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
 * @method void setOriginType(string $OriginType) Set Origin server type, with values:
<li>IP_DOMAIN: IPv4, IPv6, or domain name type origin server;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWS_S3: AWS S3 origin server;</li>
<li>ORIGIN_GROUP: origin server group type origin server;</li>
 <li>VOD: Video on Demand;</li>
<li>SPACE: origin server uninstallation. Currently only available to the allowlist;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
 * @method string getOrigin() Obtain Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IP_DOMAIN, fill in an IPv4 address, an IPv6 address, or a domain name;</li>
<li>When OriginType = COS, fill in the access domain name of the COS bucket;</li>
<li>When OriginType = AWS_S3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = ORIGIN_GROUP, fill in the origin server group ID;</li>
<li>When OriginType = VOD, fill in the VOD application ID;</li>
<li>When OriginType = LB, fill in the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist;</li>
<li>When OriginType = SPACE, fill in the origin server uninstallation space ID. This feature is currently only available to the allowlist.</li>
 * @method void setOrigin(string $Origin) Set Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IP_DOMAIN, fill in an IPv4 address, an IPv6 address, or a domain name;</li>
<li>When OriginType = COS, fill in the access domain name of the COS bucket;</li>
<li>When OriginType = AWS_S3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = ORIGIN_GROUP, fill in the origin server group ID;</li>
<li>When OriginType = VOD, fill in the VOD application ID;</li>
<li>When OriginType = LB, fill in the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist;</li>
<li>When OriginType = SPACE, fill in the origin server uninstallation space ID. This feature is currently only available to the allowlist.</li>
 * @method string getBackupOrigin() Obtain The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
 * @method void setBackupOrigin(string $BackupOrigin) Set The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
 * @method string getPrivateAccess() Obtain Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
 * @method array getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when PrivateAccess is on.
 * @method void setPrivateParameters(array $PrivateParameters) Set Private authentication parameter. This parameter is valid only when PrivateAccess is on.
 * @method string getHostHeader() Obtain Custom origin server HOST header. this parameter is valid only when OriginType=IP_DOMAIN.If the OriginType is another type of origin, this parameter does not need to be passed in, otherwise an error will be reported.
If OriginType is COS or AWS_S3, the HOST header for origin-pull will remain consistent with the origin server domain name.
If OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
If OriginType is VOD or SPACE, no configuration is required for this header, and the domain name takes effect based on the corresponding origin.
 * @method void setHostHeader(string $HostHeader) Set Custom origin server HOST header. this parameter is valid only when OriginType=IP_DOMAIN.If the OriginType is another type of origin, this parameter does not need to be passed in, otherwise an error will be reported.
If OriginType is COS or AWS_S3, the HOST header for origin-pull will remain consistent with the origin server domain name.
If OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
If OriginType is VOD or SPACE, no configuration is required for this header, and the domain name takes effect based on the corresponding origin.
 * @method integer getVodeoSubAppId() Obtain VODEO sub-application ID. This parameter is required when OriginType is VODEO.
 * @method void setVodeoSubAppId(integer $VodeoSubAppId) Set VODEO sub-application ID. This parameter is required when OriginType is VODEO.
 * @method string getVodeoDistributionRange() Obtain VOD on EO distribution range. This parameter is required when OriginType = VODEO. The values are: 
<li>All: all buckets under the current application;</li> 
<li>Bucket: a specified bucket.</li>
 * @method void setVodeoDistributionRange(string $VodeoDistributionRange) Set VOD on EO distribution range. This parameter is required when OriginType = VODEO. The values are: 
<li>All: all buckets under the current application;</li> 
<li>Bucket: a specified bucket.</li>
 * @method string getVodeoBucketId() Obtain VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
 * @method void setVodeoBucketId(string $VodeoBucketId) Set VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
 * @method string getVodOriginScope() Obtain VOD origin-pull scope. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server. the default value is all;</li> <li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. specify the bucket by the parameter VodBucketId.</li>.
</li>
 * @method void setVodOriginScope(string $VodOriginScope) Set VOD origin-pull scope. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server. the default value is all;</li> <li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. specify the bucket by the parameter VodBucketId.</li>.
</li>
 * @method string getVodBucketId() Obtain VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
 * @method void setVodBucketId(string $VodBucketId) Set VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
 */
class OriginInfo extends AbstractModel
{
    /**
     * @var string Origin server type, with values:
<li>IP_DOMAIN: IPv4, IPv6, or domain name type origin server;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWS_S3: AWS S3 origin server;</li>
<li>ORIGIN_GROUP: origin server group type origin server;</li>
 <li>VOD: Video on Demand;</li>
<li>SPACE: origin server uninstallation. Currently only available to the allowlist;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
     */
    public $OriginType;

    /**
     * @var string Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IP_DOMAIN, fill in an IPv4 address, an IPv6 address, or a domain name;</li>
<li>When OriginType = COS, fill in the access domain name of the COS bucket;</li>
<li>When OriginType = AWS_S3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = ORIGIN_GROUP, fill in the origin server group ID;</li>
<li>When OriginType = VOD, fill in the VOD application ID;</li>
<li>When OriginType = LB, fill in the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist;</li>
<li>When OriginType = SPACE, fill in the origin server uninstallation space ID. This feature is currently only available to the allowlist.</li>
     */
    public $Origin;

    /**
     * @var string The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
     */
    public $BackupOrigin;

    /**
     * @var string Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
     */
    public $PrivateAccess;

    /**
     * @var array Private authentication parameter. This parameter is valid only when PrivateAccess is on.
     */
    public $PrivateParameters;

    /**
     * @var string Custom origin server HOST header. this parameter is valid only when OriginType=IP_DOMAIN.If the OriginType is another type of origin, this parameter does not need to be passed in, otherwise an error will be reported.
If OriginType is COS or AWS_S3, the HOST header for origin-pull will remain consistent with the origin server domain name.
If OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
If OriginType is VOD or SPACE, no configuration is required for this header, and the domain name takes effect based on the corresponding origin.
     */
    public $HostHeader;

    /**
     * @var integer VODEO sub-application ID. This parameter is required when OriginType is VODEO.
     * @deprecated
     */
    public $VodeoSubAppId;

    /**
     * @var string VOD on EO distribution range. This parameter is required when OriginType = VODEO. The values are: 
<li>All: all buckets under the current application;</li> 
<li>Bucket: a specified bucket.</li>
     * @deprecated
     */
    public $VodeoDistributionRange;

    /**
     * @var string VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
     * @deprecated
     */
    public $VodeoBucketId;

    /**
     * @var string VOD origin-pull scope. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server. the default value is all;</li> <li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. specify the bucket by the parameter VodBucketId.</li>.
</li>
     */
    public $VodOriginScope;

    /**
     * @var string VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
     */
    public $VodBucketId;

    /**
     * @param string $OriginType Origin server type, with values:
<li>IP_DOMAIN: IPv4, IPv6, or domain name type origin server;</li>
<li>COS: Tencent Cloud COS origin server;</li>
<li>AWS_S3: AWS S3 origin server;</li>
<li>ORIGIN_GROUP: origin server group type origin server;</li>
 <li>VOD: Video on Demand;</li>
<li>SPACE: origin server uninstallation. Currently only available to the allowlist;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
     * @param string $Origin Origin server address, which varies according to the value of OriginType:
<li>When OriginType = IP_DOMAIN, fill in an IPv4 address, an IPv6 address, or a domain name;</li>
<li>When OriginType = COS, fill in the access domain name of the COS bucket;</li>
<li>When OriginType = AWS_S3, fill in the access domain name of the S3 bucket;</li>
<li>When OriginType = ORIGIN_GROUP, fill in the origin server group ID;</li>
<li>When OriginType = VOD, fill in the VOD application ID;</li>
<li>When OriginType = LB, fill in the Cloud Load Balancer instance ID. This feature is currently only available to the allowlist;</li>
<li>When OriginType = SPACE, fill in the origin server uninstallation space ID. This feature is currently only available to the allowlist.</li>
     * @param string $BackupOrigin The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
     * @param string $PrivateAccess Whether access to the private Cloud Object Storage origin server is allowed. This parameter is valid only when OriginType is COS or AWS_S3. Valid values:
<li>on: Enable private authentication;</li>
<li>off: Disable private authentication.</li>
If it is not specified, the default value is off.
     * @param array $PrivateParameters Private authentication parameter. This parameter is valid only when PrivateAccess is on.
     * @param string $HostHeader Custom origin server HOST header. this parameter is valid only when OriginType=IP_DOMAIN.If the OriginType is another type of origin, this parameter does not need to be passed in, otherwise an error will be reported.
If OriginType is COS or AWS_S3, the HOST header for origin-pull will remain consistent with the origin server domain name.
If OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
If OriginType is VOD or SPACE, no configuration is required for this header, and the domain name takes effect based on the corresponding origin.
     * @param integer $VodeoSubAppId VODEO sub-application ID. This parameter is required when OriginType is VODEO.
     * @param string $VodeoDistributionRange VOD on EO distribution range. This parameter is required when OriginType = VODEO. The values are: 
<li>All: all buckets under the current application;</li> 
<li>Bucket: a specified bucket.</li>
     * @param string $VodeoBucketId VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
     * @param string $VodOriginScope VOD origin-pull scope. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server. the default value is all;</li> <li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. specify the bucket by the parameter VodBucketId.</li>.
</li>
     * @param string $VodBucketId VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("BackupOrigin",$param) and $param["BackupOrigin"] !== null) {
            $this->BackupOrigin = $param["BackupOrigin"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }

        if (array_key_exists("VodeoSubAppId",$param) and $param["VodeoSubAppId"] !== null) {
            $this->VodeoSubAppId = $param["VodeoSubAppId"];
        }

        if (array_key_exists("VodeoDistributionRange",$param) and $param["VodeoDistributionRange"] !== null) {
            $this->VodeoDistributionRange = $param["VodeoDistributionRange"];
        }

        if (array_key_exists("VodeoBucketId",$param) and $param["VodeoBucketId"] !== null) {
            $this->VodeoBucketId = $param["VodeoBucketId"];
        }

        if (array_key_exists("VodOriginScope",$param) and $param["VodOriginScope"] !== null) {
            $this->VodOriginScope = $param["VodOriginScope"];
        }

        if (array_key_exists("VodBucketId",$param) and $param["VodBucketId"] !== null) {
            $this->VodBucketId = $param["VodBucketId"];
        }
    }
}
