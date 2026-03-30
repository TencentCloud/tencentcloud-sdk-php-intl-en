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
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or DOMAIN type origin server.</li>.
<Li>COS: tencent cloud cos origin server;</li>.
<Li>AWS_S3: aws s3 cos origin server;</li>.
<Li>ORIGIN_GROUP: origin server group type origin server;</li>.
<Li>VOD: video on demand;</li>.
<Li>SPACE: origin server uninstallation. currently only available to the allowlist;</li>.
<li>LB: load balancing. Currently only available to the allowlist. </li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or DOMAIN type origin server.</li>.
<Li>COS: tencent cloud cos origin server;</li>.
<Li>AWS_S3: aws s3 cos origin server;</li>.
<Li>ORIGIN_GROUP: origin server group type origin server;</li>.
<Li>VOD: video on demand;</li>.
<Li>SPACE: origin server uninstallation. currently only available to the allowlist;</li>.
<li>LB: load balancing. Currently only available to the allowlist. </li>
 * @method string getOrigin() Obtain Origin server address, which varies according to the value of OriginType:.
<li>When OriginType = IP_DOMAIN, this parameter should be an IPv4 address, an IPv6 address, or a DOMAIN name;</li>.
<li>When OriginType = COS, this parameter is the access domain of the COS bucket;</li>.
<li>When OriginType = AWS_S3, this parameter is the access domain of the S3 bucket;</li>.
<li>When OriginType = ORIGIN_GROUP, this parameter should be the ORIGIN server GROUP ID. if referencing an ORIGIN server GROUP from other sites, the format is {ORIGIN server GROUP ID}@{ZoneID}, such as og-testorigin@zone-38moq1z10wwwy;</li>.
<li>When OriginType = VOD, this parameter is the VOD application ID;</li>.
<li>When OriginType = LB, this parameter is the cloud load balancer instance ID. this feature is currently only available to the allowlist. if referencing a load balancer from other sites, the format is {cloud load balancer ID}@{ZoneID}, such as LB-2rxpamcyqfzg@zone-38moq1z10wwwy;</li>.
<li>When OriginType = SPACE, this parameter specifies the origin server uninstallation SPACE ID. this feature is currently only available to the allowlist.</li>.
 * @method void setOrigin(string $Origin) Set Origin server address, which varies according to the value of OriginType:.
<li>When OriginType = IP_DOMAIN, this parameter should be an IPv4 address, an IPv6 address, or a DOMAIN name;</li>.
<li>When OriginType = COS, this parameter is the access domain of the COS bucket;</li>.
<li>When OriginType = AWS_S3, this parameter is the access domain of the S3 bucket;</li>.
<li>When OriginType = ORIGIN_GROUP, this parameter should be the ORIGIN server GROUP ID. if referencing an ORIGIN server GROUP from other sites, the format is {ORIGIN server GROUP ID}@{ZoneID}, such as og-testorigin@zone-38moq1z10wwwy;</li>.
<li>When OriginType = VOD, this parameter is the VOD application ID;</li>.
<li>When OriginType = LB, this parameter is the cloud load balancer instance ID. this feature is currently only available to the allowlist. if referencing a load balancer from other sites, the format is {cloud load balancer ID}@{ZoneID}, such as LB-2rxpamcyqfzg@zone-38moq1z10wwwy;</li>.
<li>When OriginType = SPACE, this parameter specifies the origin server uninstallation SPACE ID. this feature is currently only available to the allowlist.</li>.
 * @method string getBackupOrigin() Obtain The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
 * @method void setBackupOrigin(string $BackupOrigin) Set The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
 * @method string getPrivateAccess() Obtain Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type OriginType is COS or AWS_S3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li>if left empty, the default value is off.
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type OriginType is COS or AWS_S3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li>if left empty, the default value is off.
 * @method array getPrivateParameters() Obtain Private authentication parameter. This parameter is valid only when PrivateAccess is on.
 * @method void setPrivateParameters(array $PrivateParameters) Set Private authentication parameter. This parameter is valid only when PrivateAccess is on.
 * @method string getHostHeader() Obtain Custom origin server HOST header. this parameter is valid only when OriginType = IP_DOMAIN. when OriginType is other types, this parameter is not required, otherwise error will occur.
When OriginType is COS or AWS_S3, the origin-pull HOST header will remain consistent with the origin server domain name.
When OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
When OriginType is VOD or SPACE, no configuration required for this header, the corresponding domain name takes effect.
 * @method void setHostHeader(string $HostHeader) Set Custom origin server HOST header. this parameter is valid only when OriginType = IP_DOMAIN. when OriginType is other types, this parameter is not required, otherwise error will occur.
When OriginType is COS or AWS_S3, the origin-pull HOST header will remain consistent with the origin server domain name.
When OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
When OriginType is VOD or SPACE, no configuration required for this header, the corresponding domain name takes effect.
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
 * @method string getVodOriginScope() Obtain VOD origin range. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server.</li><li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. use parameter VodBucketId to specify the bucket.</li>default value is all if left empty.
 * @method void setVodOriginScope(string $VodOriginScope) Set VOD origin range. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server.</li><li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. use parameter VodBucketId to specify the bucket.</li>default value is all if left empty.
 * @method string getVodBucketId() Obtain VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
 * @method void setVodBucketId(string $VodBucketId) Set VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
 */
class OriginInfo extends AbstractModel
{
    /**
     * @var string Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or DOMAIN type origin server.</li>.
<Li>COS: tencent cloud cos origin server;</li>.
<Li>AWS_S3: aws s3 cos origin server;</li>.
<Li>ORIGIN_GROUP: origin server group type origin server;</li>.
<Li>VOD: video on demand;</li>.
<Li>SPACE: origin server uninstallation. currently only available to the allowlist;</li>.
<li>LB: load balancing. Currently only available to the allowlist. </li>
     */
    public $OriginType;

    /**
     * @var string Origin server address, which varies according to the value of OriginType:.
<li>When OriginType = IP_DOMAIN, this parameter should be an IPv4 address, an IPv6 address, or a DOMAIN name;</li>.
<li>When OriginType = COS, this parameter is the access domain of the COS bucket;</li>.
<li>When OriginType = AWS_S3, this parameter is the access domain of the S3 bucket;</li>.
<li>When OriginType = ORIGIN_GROUP, this parameter should be the ORIGIN server GROUP ID. if referencing an ORIGIN server GROUP from other sites, the format is {ORIGIN server GROUP ID}@{ZoneID}, such as og-testorigin@zone-38moq1z10wwwy;</li>.
<li>When OriginType = VOD, this parameter is the VOD application ID;</li>.
<li>When OriginType = LB, this parameter is the cloud load balancer instance ID. this feature is currently only available to the allowlist. if referencing a load balancer from other sites, the format is {cloud load balancer ID}@{ZoneID}, such as LB-2rxpamcyqfzg@zone-38moq1z10wwwy;</li>.
<li>When OriginType = SPACE, this parameter specifies the origin server uninstallation SPACE ID. this feature is currently only available to the allowlist.</li>.
     */
    public $Origin;

    /**
     * @var string The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
     */
    public $BackupOrigin;

    /**
     * @var string Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type OriginType is COS or AWS_S3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li>if left empty, the default value is off.
     */
    public $PrivateAccess;

    /**
     * @var array Private authentication parameter. This parameter is valid only when PrivateAccess is on.
     */
    public $PrivateParameters;

    /**
     * @var string Custom origin server HOST header. this parameter is valid only when OriginType = IP_DOMAIN. when OriginType is other types, this parameter is not required, otherwise error will occur.
When OriginType is COS or AWS_S3, the origin-pull HOST header will remain consistent with the origin server domain name.
When OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
When OriginType is VOD or SPACE, no configuration required for this header, the corresponding domain name takes effect.
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
     * @var string VOD origin range. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server.</li><li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. use parameter VodBucketId to specify the bucket.</li>default value is all if left empty.
     */
    public $VodOriginScope;

    /**
     * @var string VOD bucket ID. this parameter is required when OriginType = VOD and VodOriginScope = bucket. data source: storage ID of the bucket under the VOD professional edition application.
     */
    public $VodBucketId;

    /**
     * @param string $OriginType Origin server type. Valid values:
<li>IP_DOMAIN: IPV4, IPV6, or DOMAIN type origin server.</li>.
<Li>COS: tencent cloud cos origin server;</li>.
<Li>AWS_S3: aws s3 cos origin server;</li>.
<Li>ORIGIN_GROUP: origin server group type origin server;</li>.
<Li>VOD: video on demand;</li>.
<Li>SPACE: origin server uninstallation. currently only available to the allowlist;</li>.
<li>LB: load balancing. Currently only available to the allowlist. </li>
     * @param string $Origin Origin server address, which varies according to the value of OriginType:.
<li>When OriginType = IP_DOMAIN, this parameter should be an IPv4 address, an IPv6 address, or a DOMAIN name;</li>.
<li>When OriginType = COS, this parameter is the access domain of the COS bucket;</li>.
<li>When OriginType = AWS_S3, this parameter is the access domain of the S3 bucket;</li>.
<li>When OriginType = ORIGIN_GROUP, this parameter should be the ORIGIN server GROUP ID. if referencing an ORIGIN server GROUP from other sites, the format is {ORIGIN server GROUP ID}@{ZoneID}, such as og-testorigin@zone-38moq1z10wwwy;</li>.
<li>When OriginType = VOD, this parameter is the VOD application ID;</li>.
<li>When OriginType = LB, this parameter is the cloud load balancer instance ID. this feature is currently only available to the allowlist. if referencing a load balancer from other sites, the format is {cloud load balancer ID}@{ZoneID}, such as LB-2rxpamcyqfzg@zone-38moq1z10wwwy;</li>.
<li>When OriginType = SPACE, this parameter specifies the origin server uninstallation SPACE ID. this feature is currently only available to the allowlist.</li>.
     * @param string $BackupOrigin The ID of the secondary origin group. This parameter is valid only when OriginType is ORIGIN_GROUP. This field indicates the old version capability, which cannot be configured or modified on the control panel after being called. Please submit a ticket if required.
     * @param string $PrivateAccess Whether access to the private object storage origin server is allowed. this parameter is valid only when the origin server type OriginType is COS or AWS_S3. valid values:.
<Li>On: enable private authentication;</li>.
<Li>Off: disable private authentication.</li>if left empty, the default value is off.
     * @param array $PrivateParameters Private authentication parameter. This parameter is valid only when PrivateAccess is on.
     * @param string $HostHeader Custom origin server HOST header. this parameter is valid only when OriginType = IP_DOMAIN. when OriginType is other types, this parameter is not required, otherwise error will occur.
When OriginType is COS or AWS_S3, the origin-pull HOST header will remain consistent with the origin server domain name.
When OriginType is ORIGIN_GROUP, the HOST header follows the ORIGIN site GROUP configuration. if not configured, it defaults to the acceleration domain name.
When OriginType is VOD or SPACE, no configuration required for this header, the corresponding domain name takes effect.
     * @param integer $VodeoSubAppId VODEO sub-application ID. This parameter is required when OriginType is VODEO.
     * @param string $VodeoDistributionRange VOD on EO distribution range. This parameter is required when OriginType = VODEO. The values are: 
<li>All: all buckets under the current application;</li> 
<li>Bucket: a specified bucket.</li>
     * @param string $VodeoBucketId VODEO storage bucket ID. This parameter is required when OriginType is VODEO and VodeoDistributionRange is Bucket.
     * @param string $VodOriginScope VOD origin range. this parameter is valid only when OriginType = VOD. valid values: <li>all: all files in the VOD application corresponding to the current origin server.</li><li>bucket: files in a specified bucket under the VOD application corresponding to the current origin server. use parameter VodBucketId to specify the bucket.</li>default value is all if left empty.
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
