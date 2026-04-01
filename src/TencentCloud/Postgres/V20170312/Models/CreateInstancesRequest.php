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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances request structure.
 *
 * @method string getZone() Obtain <p>The primary availability zone of the instance, for example: ap-guangzhou-3. If needed to support multiple AZs, add primary and secondary AZ information in the DBNodeSet.N field.<br>AZ information can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> api and checking the Zone field in the returned value.</p>
 * @method void setZone(string $Zone) Set <p>The primary availability zone of the instance, for example: ap-guangzhou-3. If needed to support multiple AZs, add primary and secondary AZ information in the DBNodeSet.N field.<br>AZ information can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> api and checking the Zone field in the returned value.</p>
 * @method string getSpecCode() Obtain <p>Purchasable specification code. Obtain this parameter by calling the `SpecCode` field in the return value of <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a>.</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Purchasable specification code. Obtain this parameter by calling the `SpecCode` field in the return value of <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a>.</p>
 * @method integer getStorage() Obtain <p>Instance disk capacity size, unit: GB. The step length for parameter settings is 10.</p>
 * @method void setStorage(integer $Storage) Set <p>Instance disk capacity size, unit: GB. The step length for parameter settings is 10.</p>
 * @method integer getInstanceCount() Obtain <p>Number of instances to purchase, value ranges from 1 to 10. Single transaction supports a maximum quantity of 10. If exceeding this quantity, multiple calls can be performed to purchase.</p>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Number of instances to purchase, value ranges from 1 to 10. Single transaction supports a maximum quantity of 10. If exceeding this quantity, multiple calls can be performed to purchase.</p>
 * @method integer getPeriod() Obtain <p>Purchase duration, unit: month.</p><li>Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li><li>Postpaid: Supports only `1`.</li>
 * @method void setPeriod(integer $Period) Set <p>Purchase duration, unit: month.</p><li>Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li><li>Postpaid: Supports only `1`.</li>
 * @method string getCharset() Obtain <p>Instance character set, which currently supports only:</p><li>UTF8</li><li>LATIN1</li>
 * @method void setCharset(string $Charset) Set <p>Instance character set, which currently supports only:</p><li>UTF8</li><li>LATIN1</li>
 * @method string getAdminName() Obtain <p>Username of the instance root account. Specific specifications are as follows:</p><li>The username must consist of 1-16 characters, which can only be letters, digits, or underscores.</li><li>Cannot be postgres.</li><li>Cannot begin with digits or pg_.</li><li>All rules are case-insensitive.</li>
 * @method void setAdminName(string $AdminName) Set <p>Username of the instance root account. Specific specifications are as follows:</p><li>The username must consist of 1-16 characters, which can only be letters, digits, or underscores.</li><li>Cannot be postgres.</li><li>Cannot begin with digits or pg_.</li><li>All rules are case-insensitive.</li>
 * @method string getAdminPassword() Obtain <p>Password for the instance root account username, with a length of 8-32 characters. It is recommended to use a password of more than 12 characters and it cannot start with "/".<br>Must contain the following four character types:</p><li>Lowercase letter: [a-z]</li><li>Uppercase letter: [a-z]</li><li>Number: 0-9</li><li>Special character: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
 * @method void setAdminPassword(string $AdminPassword) Set <p>Password for the instance root account username, with a length of 8-32 characters. It is recommended to use a password of more than 12 characters and it cannot start with "/".<br>Must contain the following four character types:</p><li>Lowercase letter: [a-z]</li><li>Uppercase letter: [a-z]</li><li>Number: 0-9</li><li>Special character: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
 * @method string getDBMajorVersion() Obtain <p>PostgreSQL major version number (this parameter is currently required). Version information can be obtained from <a href="https://www.tencentcloud.com/document/api/409/89018?from_cn_redirect=1">DescribeDBVersions</a>. Currently supports major versions 10, 11, 12, 13, 14, and 15. For details, see <a href="https://www.tencentcloud.com/document/product/409/67018?from_cn_redirect=1">kernel version overview</a>.<br>When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.</p>
 * @method void setDBMajorVersion(string $DBMajorVersion) Set <p>PostgreSQL major version number (this parameter is currently required). Version information can be obtained from <a href="https://www.tencentcloud.com/document/api/409/89018?from_cn_redirect=1">DescribeDBVersions</a>. Currently supports major versions 10, 11, 12, 13, 14, and 15. For details, see <a href="https://www.tencentcloud.com/document/product/409/67018?from_cn_redirect=1">kernel version overview</a>.<br>When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.</p>
 * @method string getDBVersion() Obtain <p>PostgreSQL community major version + minor version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.</p>
 * @method void setDBVersion(string $DBVersion) Set <p>PostgreSQL community major version + minor version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.</p>
 * @method string getDBKernelVersion() Obtain <p>PostgreSQL kernel version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.</p>
 * @method void setDBKernelVersion(string $DBKernelVersion) Set <p>PostgreSQL kernel version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.</p>
 * @method string getInstanceChargeType() Obtain <p>Instance billing type. Currently supports:</p><li>PREPAID: Prepayment, i.e., yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: Postpaid, i.e., pay-as-you-go</li>Default value: PREPAID
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing type. Currently supports:</p><li>PREPAID: Prepayment, i.e., yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: Postpaid, i.e., pay-as-you-go</li>Default value: PREPAID
 * @method string getVpcId() Obtain <p>VPC ID, such as vpc-xxxxxxxx (this parameter is currently required). A valid VPC ID can be obtained by logging in to the console to query or by calling the API <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> and acquiring the unVpcId field in the API return.</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID, such as vpc-xxxxxxxx (this parameter is currently required). A valid VPC ID can be obtained by logging in to the console to query or by calling the API <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> and acquiring the unVpcId field in the API return.</p>
 * @method string getSubnetId() Obtain <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is currently required). Effective VPC subnet IDs can be queried by logging in to the console or by calling the API <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> and acquiring the unSubnetId field in the API return.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is currently required). Effective VPC subnet IDs can be queried by logging in to the console or by calling the API <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> and acquiring the unSubnetId field in the API return.</p>
 * @method array getDBNodeSet() Obtain <p>Instance node deployment information. When multi-availability zone deployment is supported, it requires specifying the AZ information for each node.<br>AZ information can be obtained from the Zone field in the returned value by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method void setDBNodeSet(array $DBNodeSet) Set <p>Instance node deployment information. When multi-availability zone deployment is supported, it requires specifying the AZ information for each node.<br>AZ information can be obtained from the Zone field in the returned value by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method integer getAutoRenewFlag() Obtain <p>Auto-renewal flag:</p><li>0: Manual renewal</li><li>1: Auto renewal</li>Default value: 0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Auto-renewal flag:</p><li>0: Manual renewal</li><li>1: Auto renewal</li>Default value: 0
 * @method integer getAutoVoucher() Obtain <p>Whether to automatically use a voucher:</p><li>0: No</li><li>1: Yes</li>Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Whether to automatically use a voucher:</p><li>0: No</li><li>1: Yes</li>Default value: 0
 * @method array getVoucherIds() Obtain <p>Voucher ID list. Currently only support specifying one voucher.</p>
 * @method void setVoucherIds(array $VoucherIds) Set <p>Voucher ID list. Currently only support specifying one voucher.</p>
 * @method integer getProjectId() Obtain <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
 * @method integer getActivityId() Obtain <p>Activity ID.</p>
 * @method void setActivityId(integer $ActivityId) Set <p>Activity ID.</p>
 * @method string getName() Obtain <p>Instance name only supports Chinese/English/number/"_"/"-" with length less than 60. If no instance name is specified, "unnamed" is displayed by default.</p>
 * @method void setName(string $Name) Set <p>Instance name only supports Chinese/English/number/"_"/"-" with length less than 60. If no instance name is specified, "unnamed" is displayed by default.</p>
 * @method array getTagList() Obtain <p>Tag information that should be bound to the instance is empty by default. You can get it by calling <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> and checking the Tags field in the return value.</p>
 * @method void setTagList(array $TagList) Set <p>Tag information that should be bound to the instance is empty by default. You can get it by calling <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> and checking the Tags field in the return value.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group to which an instance belongs. Obtain this parameter by calling the sgId field in the returned value of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>. If not specified, the default security group is bound.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group to which an instance belongs. Obtain this parameter by calling the sgId field in the returned value of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>. If not specified, the default security group is bound.</p>
 * @method integer getNeedSupportTDE() Obtain <p>Whether data transparent encryption is required:</p><li>0: No</li><li>1: Yes</li>Default value: 0. See [Overview of Data Transparent Encryption](https://www.tencentcloud.com/document/product/409/71748?from_cn_redirect=1).
 * @method void setNeedSupportTDE(integer $NeedSupportTDE) Set <p>Whether data transparent encryption is required:</p><li>0: No</li><li>1: Yes</li>Default value: 0. See [Overview of Data Transparent Encryption](https://www.tencentcloud.com/document/product/409/71748?from_cn_redirect=1).
 * @method string getKMSKeyId() Obtain <p>The KeyId of the custom key. If you select custom key encryption, you need to input the KeyId of the custom key. KeyId is the unique identifier of CMK.<br>For related reference on KeyId creation and retrieval, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">Enable Transparent Data Encryption</a></p>
 * @method void setKMSKeyId(string $KMSKeyId) Set <p>The KeyId of the custom key. If you select custom key encryption, you need to input the KeyId of the custom key. KeyId is the unique identifier of CMK.<br>For related reference on KeyId creation and retrieval, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">Enable Transparent Data Encryption</a></p>
 * @method string getKMSRegion() Obtain <p>For regions using the KMS service, KMSRegion is empty by default and the local region KMS is used. If the local region is not supported, select another KMS supported region.<br>For details about KMSRegion, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">enable transparent data encryption</a></p>
 * @method void setKMSRegion(string $KMSRegion) Set <p>For regions using the KMS service, KMSRegion is empty by default and the local region KMS is used. If the local region is not supported, select another KMS supported region.<br>For details about KMSRegion, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">enable transparent data encryption</a></p>
 * @method string getKMSClusterId() Obtain <p>Designate the service cluster for KMS. If KMSClusterId is empty, use the KMS of the Default Cluster. To select the specified KMS cluster, require the input of KMSClusterId. For details about KMSClusterId, see enable transparent data encryption.</p>
 * @method void setKMSClusterId(string $KMSClusterId) Set <p>Designate the service cluster for KMS. If KMSClusterId is empty, use the KMS of the Default Cluster. To select the specified KMS cluster, require the input of KMSClusterId. For details about KMSClusterId, see enable transparent data encryption.</p>
 * @method string getDBEngine() Obtain <p>Database engine, support:</p><li>`postgresql`: TencentDB for PostgreSQL</li><li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>Default value: postgresql
 * @method void setDBEngine(string $DBEngine) Set <p>Database engine, support:</p><li>`postgresql`: TencentDB for PostgreSQL</li><li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>Default value: postgresql
 * @method string getDBEngineConfig() Obtain <p>Configuration information for the database engine. The configuration format is as follows:<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>Supported engines:<br>mssql_compatible engine:</p><li>migrationMode: Database schema, optional parameter. Valid values: single-db (single-database mode), multi-db (multi-database mode). Default is single-db.</li><li>defaultLocale: Sorting area rule, optional parameter, cannot be modified after initialization. Default is en_US. Valid values include: "af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".</li><li>serverCollationName: Collation name, optional parameter, cannot be modified after initialization. Default is sql_latin1_general_cp1_ci_as. Valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as".</li>
 * @method void setDBEngineConfig(string $DBEngineConfig) Set <p>Configuration information for the database engine. The configuration format is as follows:<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>Supported engines:<br>mssql_compatible engine:</p><li>migrationMode: Database schema, optional parameter. Valid values: single-db (single-database mode), multi-db (multi-database mode). Default is single-db.</li><li>defaultLocale: Sorting area rule, optional parameter, cannot be modified after initialization. Default is en_US. Valid values include: "af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".</li><li>serverCollationName: Collation name, optional parameter, cannot be modified after initialization. Default is sql_latin1_general_cp1_ci_as. Valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as".</li>
 * @method string getSyncMode() Obtain <p>Primary-standby sync mode, supports: </p><li>Semi-sync: semi-synchronous</li><li>Async: asynchronous</li>Default value for the primary instance: Semi-syncDefault value for the read-only instance: Async
 * @method void setSyncMode(string $SyncMode) Set <p>Primary-standby sync mode, supports: </p><li>Semi-sync: semi-synchronous</li><li>Async: asynchronous</li>Default value for the primary instance: Semi-syncDefault value for the read-only instance: Async
 * @method integer getNeedSupportIpv6() Obtain <p>Whether required to support Ipv6:</p><li>0: No</li><li>1: Yes</li>Default value: 0
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set <p>Whether required to support Ipv6:</p><li>0: No</li><li>1: Yes</li>Default value: 0
 * @method boolean getDeletionProtection() Obtain <p>Whether to enable deletion protection for the instance: true-enable deletion protection; false-disable deletion protection.</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) Set <p>Whether to enable deletion protection for the instance: true-enable deletion protection; false-disable deletion protection.</p>
 * @method string getStorageType() Obtain <p>Instance storage type. Available values: PHYSICAL_LOCAL_SSD: LOCAL SSD hard disk of PHYSICAL machine; CLOUD_PREMIUM: high-performance CLOUD block storage; CLOUD_SSD: SSD CLOUD disk; CLOUD_HSSD: enhanced SSD CLOUD disk.</p>
 * @method void setStorageType(string $StorageType) Set <p>Instance storage type. Available values: PHYSICAL_LOCAL_SSD: LOCAL SSD hard disk of PHYSICAL machine; CLOUD_PREMIUM: high-performance CLOUD block storage; CLOUD_SSD: SSD CLOUD disk; CLOUD_HSSD: enhanced SSD CLOUD disk.</p>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>The primary availability zone of the instance, for example: ap-guangzhou-3. If needed to support multiple AZs, add primary and secondary AZ information in the DBNodeSet.N field.<br>AZ information can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> api and checking the Zone field in the returned value.</p>
     */
    public $Zone;

    /**
     * @var string <p>Purchasable specification code. Obtain this parameter by calling the `SpecCode` field in the return value of <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a>.</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>Instance disk capacity size, unit: GB. The step length for parameter settings is 10.</p>
     */
    public $Storage;

    /**
     * @var integer <p>Number of instances to purchase, value ranges from 1 to 10. Single transaction supports a maximum quantity of 10. If exceeding this quantity, multiple calls can be performed to purchase.</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>Purchase duration, unit: month.</p><li>Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li><li>Postpaid: Supports only `1`.</li>
     */
    public $Period;

    /**
     * @var string <p>Instance character set, which currently supports only:</p><li>UTF8</li><li>LATIN1</li>
     */
    public $Charset;

    /**
     * @var string <p>Username of the instance root account. Specific specifications are as follows:</p><li>The username must consist of 1-16 characters, which can only be letters, digits, or underscores.</li><li>Cannot be postgres.</li><li>Cannot begin with digits or pg_.</li><li>All rules are case-insensitive.</li>
     */
    public $AdminName;

    /**
     * @var string <p>Password for the instance root account username, with a length of 8-32 characters. It is recommended to use a password of more than 12 characters and it cannot start with "/".<br>Must contain the following four character types:</p><li>Lowercase letter: [a-z]</li><li>Uppercase letter: [a-z]</li><li>Number: 0-9</li><li>Special character: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
     */
    public $AdminPassword;

    /**
     * @var string <p>PostgreSQL major version number (this parameter is currently required). Version information can be obtained from <a href="https://www.tencentcloud.com/document/api/409/89018?from_cn_redirect=1">DescribeDBVersions</a>. Currently supports major versions 10, 11, 12, 13, 14, and 15. For details, see <a href="https://www.tencentcloud.com/document/product/409/67018?from_cn_redirect=1">kernel version overview</a>.<br>When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.</p>
     */
    public $DBMajorVersion;

    /**
     * @var string <p>PostgreSQL community major version + minor version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.</p>
     */
    public $DBVersion;

    /**
     * @var string <p>PostgreSQL kernel version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.</p>
     */
    public $DBKernelVersion;

    /**
     * @var string <p>Instance billing type. Currently supports:</p><li>PREPAID: Prepayment, i.e., yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: Postpaid, i.e., pay-as-you-go</li>Default value: PREPAID
     */
    public $InstanceChargeType;

    /**
     * @var string <p>VPC ID, such as vpc-xxxxxxxx (this parameter is currently required). A valid VPC ID can be obtained by logging in to the console to query or by calling the API <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> and acquiring the unVpcId field in the API return.</p>
     */
    public $VpcId;

    /**
     * @var string <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is currently required). Effective VPC subnet IDs can be queried by logging in to the console or by calling the API <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> and acquiring the unSubnetId field in the API return.</p>
     */
    public $SubnetId;

    /**
     * @var array <p>Instance node deployment information. When multi-availability zone deployment is supported, it requires specifying the AZ information for each node.<br>AZ information can be obtained from the Zone field in the returned value by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
     */
    public $DBNodeSet;

    /**
     * @var integer <p>Auto-renewal flag:</p><li>0: Manual renewal</li><li>1: Auto renewal</li>Default value: 0
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Whether to automatically use a voucher:</p><li>0: No</li><li>1: Yes</li>Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var array <p>Voucher ID list. Currently only support specifying one voucher.</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Activity ID.</p>
     */
    public $ActivityId;

    /**
     * @var string <p>Instance name only supports Chinese/English/number/"_"/"-" with length less than 60. If no instance name is specified, "unnamed" is displayed by default.</p>
     */
    public $Name;

    /**
     * @var array <p>Tag information that should be bound to the instance is empty by default. You can get it by calling <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> and checking the Tags field in the return value.</p>
     */
    public $TagList;

    /**
     * @var array <p>Security group to which an instance belongs. Obtain this parameter by calling the sgId field in the returned value of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>. If not specified, the default security group is bound.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var integer <p>Whether data transparent encryption is required:</p><li>0: No</li><li>1: Yes</li>Default value: 0. See [Overview of Data Transparent Encryption](https://www.tencentcloud.com/document/product/409/71748?from_cn_redirect=1).
     */
    public $NeedSupportTDE;

    /**
     * @var string <p>The KeyId of the custom key. If you select custom key encryption, you need to input the KeyId of the custom key. KeyId is the unique identifier of CMK.<br>For related reference on KeyId creation and retrieval, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">Enable Transparent Data Encryption</a></p>
     */
    public $KMSKeyId;

    /**
     * @var string <p>For regions using the KMS service, KMSRegion is empty by default and the local region KMS is used. If the local region is not supported, select another KMS supported region.<br>For details about KMSRegion, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">enable transparent data encryption</a></p>
     */
    public $KMSRegion;

    /**
     * @var string <p>Designate the service cluster for KMS. If KMSClusterId is empty, use the KMS of the Default Cluster. To select the specified KMS cluster, require the input of KMSClusterId. For details about KMSClusterId, see enable transparent data encryption.</p>
     */
    public $KMSClusterId;

    /**
     * @var string <p>Database engine, support:</p><li>`postgresql`: TencentDB for PostgreSQL</li><li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>Default value: postgresql
     */
    public $DBEngine;

    /**
     * @var string <p>Configuration information for the database engine. The configuration format is as follows:<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>Supported engines:<br>mssql_compatible engine:</p><li>migrationMode: Database schema, optional parameter. Valid values: single-db (single-database mode), multi-db (multi-database mode). Default is single-db.</li><li>defaultLocale: Sorting area rule, optional parameter, cannot be modified after initialization. Default is en_US. Valid values include: "af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".</li><li>serverCollationName: Collation name, optional parameter, cannot be modified after initialization. Default is sql_latin1_general_cp1_ci_as. Valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as".</li>
     */
    public $DBEngineConfig;

    /**
     * @var string <p>Primary-standby sync mode, supports: </p><li>Semi-sync: semi-synchronous</li><li>Async: asynchronous</li>Default value for the primary instance: Semi-syncDefault value for the read-only instance: Async
     */
    public $SyncMode;

    /**
     * @var integer <p>Whether required to support Ipv6:</p><li>0: No</li><li>1: Yes</li>Default value: 0
     */
    public $NeedSupportIpv6;

    /**
     * @var boolean <p>Whether to enable deletion protection for the instance: true-enable deletion protection; false-disable deletion protection.</p>
     */
    public $DeletionProtection;

    /**
     * @var string <p>Instance storage type. Available values: PHYSICAL_LOCAL_SSD: LOCAL SSD hard disk of PHYSICAL machine; CLOUD_PREMIUM: high-performance CLOUD block storage; CLOUD_SSD: SSD CLOUD disk; CLOUD_HSSD: enhanced SSD CLOUD disk.</p>
     */
    public $StorageType;

    /**
     * @param string $Zone <p>The primary availability zone of the instance, for example: ap-guangzhou-3. If needed to support multiple AZs, add primary and secondary AZ information in the DBNodeSet.N field.<br>AZ information can be obtained by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> api and checking the Zone field in the returned value.</p>
     * @param string $SpecCode <p>Purchasable specification code. Obtain this parameter by calling the `SpecCode` field in the return value of <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a>.</p>
     * @param integer $Storage <p>Instance disk capacity size, unit: GB. The step length for parameter settings is 10.</p>
     * @param integer $InstanceCount <p>Number of instances to purchase, value ranges from 1 to 10. Single transaction supports a maximum quantity of 10. If exceeding this quantity, multiple calls can be performed to purchase.</p>
     * @param integer $Period <p>Purchase duration, unit: month.</p><li>Prepaid: Supports `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, and `36`.</li><li>Postpaid: Supports only `1`.</li>
     * @param string $Charset <p>Instance character set, which currently supports only:</p><li>UTF8</li><li>LATIN1</li>
     * @param string $AdminName <p>Username of the instance root account. Specific specifications are as follows:</p><li>The username must consist of 1-16 characters, which can only be letters, digits, or underscores.</li><li>Cannot be postgres.</li><li>Cannot begin with digits or pg_.</li><li>All rules are case-insensitive.</li>
     * @param string $AdminPassword <p>Password for the instance root account username, with a length of 8-32 characters. It is recommended to use a password of more than 12 characters and it cannot start with "/".<br>Must contain the following four character types:</p><li>Lowercase letter: [a-z]</li><li>Uppercase letter: [a-z]</li><li>Number: 0-9</li><li>Special character: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/</li>
     * @param string $DBMajorVersion <p>PostgreSQL major version number (this parameter is currently required). Version information can be obtained from <a href="https://www.tencentcloud.com/document/api/409/89018?from_cn_redirect=1">DescribeDBVersions</a>. Currently supports major versions 10, 11, 12, 13, 14, and 15. For details, see <a href="https://www.tencentcloud.com/document/product/409/67018?from_cn_redirect=1">kernel version overview</a>.<br>When this parameter is entered, an instance running the latest kernel version of the latest minor version will be created based on this major version number.</p>
     * @param string $DBVersion <p>PostgreSQL community major version + minor version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest minor version number under the current major version can be passed.</p>
     * @param string $DBKernelVersion <p>PostgreSQL kernel version number.<br>It's generally not recommended to pass in this parameter. If needed, only the latest kernel version number under the current major version can be passed.</p>
     * @param string $InstanceChargeType <p>Instance billing type. Currently supports:</p><li>PREPAID: Prepayment, i.e., yearly/monthly subscription</li><li>POSTPAID_BY_HOUR: Postpaid, i.e., pay-as-you-go</li>Default value: PREPAID
     * @param string $VpcId <p>VPC ID, such as vpc-xxxxxxxx (this parameter is currently required). A valid VPC ID can be obtained by logging in to the console to query or by calling the API <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> and acquiring the unVpcId field in the API return.</p>
     * @param string $SubnetId <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is currently required). Effective VPC subnet IDs can be queried by logging in to the console or by calling the API <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> and acquiring the unSubnetId field in the API return.</p>
     * @param array $DBNodeSet <p>Instance node deployment information. When multi-availability zone deployment is supported, it requires specifying the AZ information for each node.<br>AZ information can be obtained from the Zone field in the returned value by calling the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
     * @param integer $AutoRenewFlag <p>Auto-renewal flag:</p><li>0: Manual renewal</li><li>1: Auto renewal</li>Default value: 0
     * @param integer $AutoVoucher <p>Whether to automatically use a voucher:</p><li>0: No</li><li>1: Yes</li>Default value: 0
     * @param array $VoucherIds <p>Voucher ID list. Currently only support specifying one voucher.</p>
     * @param integer $ProjectId <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
     * @param integer $ActivityId <p>Activity ID.</p>
     * @param string $Name <p>Instance name only supports Chinese/English/number/"_"/"-" with length less than 60. If no instance name is specified, "unnamed" is displayed by default.</p>
     * @param array $TagList <p>Tag information that should be bound to the instance is empty by default. You can get it by calling <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> and checking the Tags field in the return value.</p>
     * @param array $SecurityGroupIds <p>Security group to which an instance belongs. Obtain this parameter by calling the sgId field in the returned value of <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a>. If not specified, the default security group is bound.</p>
     * @param integer $NeedSupportTDE <p>Whether data transparent encryption is required:</p><li>0: No</li><li>1: Yes</li>Default value: 0. See [Overview of Data Transparent Encryption](https://www.tencentcloud.com/document/product/409/71748?from_cn_redirect=1).
     * @param string $KMSKeyId <p>The KeyId of the custom key. If you select custom key encryption, you need to input the KeyId of the custom key. KeyId is the unique identifier of CMK.<br>For related reference on KeyId creation and retrieval, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">Enable Transparent Data Encryption</a></p>
     * @param string $KMSRegion <p>For regions using the KMS service, KMSRegion is empty by default and the local region KMS is used. If the local region is not supported, select another KMS supported region.<br>For details about KMSRegion, see <a href="https://www.tencentcloud.com/document/product/409/71749?from_cn_redirect=1">enable transparent data encryption</a></p>
     * @param string $KMSClusterId <p>Designate the service cluster for KMS. If KMSClusterId is empty, use the KMS of the Default Cluster. To select the specified KMS cluster, require the input of KMSClusterId. For details about KMSClusterId, see enable transparent data encryption.</p>
     * @param string $DBEngine <p>Database engine, support:</p><li>`postgresql`: TencentDB for PostgreSQL</li><li>`mssql_compatible`: MSSQL compatible - TencentDB for PostgreSQL</li>Default value: postgresql
     * @param string $DBEngineConfig <p>Configuration information for the database engine. The configuration format is as follows:<br>{&quot;$key1&quot;:&quot;$value1&quot;, &quot;$key2&quot;:&quot;$value2&quot;}<br>Supported engines:<br>mssql_compatible engine:</p><li>migrationMode: Database schema, optional parameter. Valid values: single-db (single-database mode), multi-db (multi-database mode). Default is single-db.</li><li>defaultLocale: Sorting area rule, optional parameter, cannot be modified after initialization. Default is en_US. Valid values include: "af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".</li><li>serverCollationName: Collation name, optional parameter, cannot be modified after initialization. Default is sql_latin1_general_cp1_ci_as. Valid values include: "bbf_unicode_general_ci_as", "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as".</li>
     * @param string $SyncMode <p>Primary-standby sync mode, supports: </p><li>Semi-sync: semi-synchronous</li><li>Async: asynchronous</li>Default value for the primary instance: Semi-syncDefault value for the read-only instance: Async
     * @param integer $NeedSupportIpv6 <p>Whether required to support Ipv6:</p><li>0: No</li><li>1: Yes</li>Default value: 0
     * @param boolean $DeletionProtection <p>Whether to enable deletion protection for the instance: true-enable deletion protection; false-disable deletion protection.</p>
     * @param string $StorageType <p>Instance storage type. Available values: PHYSICAL_LOCAL_SSD: LOCAL SSD hard disk of PHYSICAL machine; CLOUD_PREMIUM: high-performance CLOUD block storage; CLOUD_SSD: SSD CLOUD disk; CLOUD_HSSD: enhanced SSD CLOUD disk.</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DBNodeSet",$param) and $param["DBNodeSet"] !== null) {
            $this->DBNodeSet = [];
            foreach ($param["DBNodeSet"] as $key => $value){
                $obj = new DBNode();
                $obj->deserialize($value);
                array_push($this->DBNodeSet, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NeedSupportTDE",$param) and $param["NeedSupportTDE"] !== null) {
            $this->NeedSupportTDE = $param["NeedSupportTDE"];
        }

        if (array_key_exists("KMSKeyId",$param) and $param["KMSKeyId"] !== null) {
            $this->KMSKeyId = $param["KMSKeyId"];
        }

        if (array_key_exists("KMSRegion",$param) and $param["KMSRegion"] !== null) {
            $this->KMSRegion = $param["KMSRegion"];
        }

        if (array_key_exists("KMSClusterId",$param) and $param["KMSClusterId"] !== null) {
            $this->KMSClusterId = $param["KMSClusterId"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBEngineConfig",$param) and $param["DBEngineConfig"] !== null) {
            $this->DBEngineConfig = $param["DBEngineConfig"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
