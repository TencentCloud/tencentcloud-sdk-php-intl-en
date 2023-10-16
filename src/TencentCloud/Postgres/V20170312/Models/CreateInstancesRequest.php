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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances request structure.
 *
 * @method string getZone() Obtain Primary AZ of the instance in the format of `ap-guangzhou-3`. To support multiple AZs, add information of the primary and standby AZs in the `DBNodeSet.N` field.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method void setZone(string $Zone) Set Primary AZ of the instance in the format of `ap-guangzhou-3`. To support multiple AZs, add information of the primary and standby AZs in the `DBNodeSet.N` field.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method string getSpecCode() Obtain Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method void setSpecCode(string $SpecCode) Set Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
 * @method integer getStorage() Obtain Instance storage capacity in GB
 * @method void setStorage(integer $Storage) Set Instance storage capacity in GB
 * @method integer getInstanceCount() Obtain The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
 * @method void setInstanceCount(integer $InstanceCount) Set The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
 * @method integer getPeriod() Obtain Validity period in months.
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
 * @method void setPeriod(integer $Period) Set Validity period in months.
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
 * @method string getCharset() Obtain Instance character set. Valid values: 
<li> `UTF8`
<li> `LATIN1`
 * @method void setCharset(string $Charset) Set Instance character set. Valid values: 
<li> `UTF8`
<li> `LATIN1`
 * @method string getAdminName() Obtain Username of the instance root account, which has the following rules:
<li>It must contain 1–16 letters , digits, or underscores
<li>It can't be `postgres`.
<li>It can't start with a digit or `pg_`.
<li>All rules are case-insensitive.
 * @method void setAdminName(string $AdminName) Set Username of the instance root account, which has the following rules:
<li>It must contain 1–16 letters , digits, or underscores
<li>It can't be `postgres`.
<li>It can't start with a digit or `pg_`.
<li>All rules are case-insensitive.
 * @method string getAdminPassword() Obtain Password of the instance root account, which must contain 8-32 characters (above 12 characters preferably). It cannot begin with "/",
and must contain the following 4 types of characters.
<li>Lowercase letters: [a–z]
<li>Uppercase letters: [A–Z]
<li>Digits: 0-9
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
 * @method void setAdminPassword(string $AdminPassword) Set Password of the instance root account, which must contain 8-32 characters (above 12 characters preferably). It cannot begin with "/",
and must contain the following 4 types of characters.
<li>Lowercase letters: [a–z]
<li>Uppercase letters: [A–Z]
<li>Digits: 0-9
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
 * @method string getDBMajorVersion() Obtain The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
When only this parameter is specified, an instance running the latest kernel version of the latest minor version will be created based on this major version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`. If you don't need a minor version, just pass in `DBMajorVersion`.

 * @method void setDBMajorVersion(string $DBMajorVersion) Set The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
When only this parameter is specified, an instance running the latest kernel version of the latest minor version will be created based on this major version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`. If you don't need a minor version, just pass in `DBMajorVersion`.

 * @method string getDBVersion() Obtain Number of the major PostgreSQL community version and minor version, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
If it is specified, an instance running the latest kernel version will be created based on the community minor version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`.
 * @method void setDBVersion(string $DBVersion) Set Number of the major PostgreSQL community version and minor version, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
If it is specified, an instance running the latest kernel version will be created based on the community minor version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`.
 * @method string getDBKernelVersion() Obtain PostgreSQL kernel version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
PostgreSQL kernel version number. If it is specified, an instance running the specified kernel version will be created. Passing in this parameter in other scenarios is not supported.This parameter is only used to specify a kernel version, which serves no other purposes.

 * @method void setDBKernelVersion(string $DBKernelVersion) Set PostgreSQL kernel version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
PostgreSQL kernel version number. If it is specified, an instance running the specified kernel version will be created. Passing in this parameter in other scenarios is not supported.This parameter is only used to specify a kernel version, which serves no other purposes.

 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`.
 * @method string getVpcId() Obtain VPC ID in the format of `vpc-xxxxxxx`. To obtain valid VPC IDs, you can log in to the console or call [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) and look for the `unVpcId` fields in the response.
 * @method void setVpcId(string $VpcId) Set VPC ID in the format of `vpc-xxxxxxx`. To obtain valid VPC IDs, you can log in to the console or call [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) and look for the `unVpcId` fields in the response.
 * @method string getSubnetId() Obtain VPC subnet ID in the format of `subnet-xxxxxxxx`, u200cwhich can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID in the format of `subnet-xxxxxxxx`, u200cwhich can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
 * @method array getDBNodeSet() Obtain Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method void setDBNodeSet(array $DBNodeSet) Set Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li> `1`: Automatic renewal.
Default value: `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li> `1`: Automatic renewal.
Default value: `0`.
 * @method integer getAutoVoucher() Obtain Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method array getVoucherIds() Obtain Voucher ID list. Currently, you can specify only one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Currently, you can specify only one voucher.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getActivityId() Obtain Campaign ID
 * @method void setActivityId(integer $ActivityId) Set Campaign ID
 * @method string getName() Obtain Instance name, which can contain up to 60 letters, digits, hyphens, and symbols (_-). If this parameter is not specified, "Unnamed" will be displayed by default.

 * @method void setName(string $Name) Set Instance name, which can contain up to 60 letters, digits, hyphens, and symbols (_-). If this parameter is not specified, "Unnamed" will be displayed by default.

 * @method array getTagList() Obtain The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method void setTagList(array $TagList) Set The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
 * @method array getSecurityGroupIds() Obtain Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

 * @method integer getNeedSupportTDE() Obtain Whether to support TDE. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
For more information, see [TDE]u200d(https://www.tencentcloud.com/document/product/409/47765).
 * @method void setNeedSupportTDE(integer $NeedSupportTDE) Set Whether to support TDE. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
For more information, see [TDE]u200d(https://www.tencentcloud.com/document/product/409/47765).
 * @method string getKMSKeyId() Obtain KeyId of custom key, which is required if you select custom key encryption. It is also the unique CMK identifier.
For more information on creating `KeyId`, see [Enabling TDE](https://www.tencentcloud.com/document/product/409/47762).
 * @method void setKMSKeyId(string $KMSKeyId) Set KeyId of custom key, which is required if you select custom key encryption. It is also the unique CMK identifier.
For more information on creating `KeyId`, see [Enabling TDE](https://www.tencentcloud.com/document/product/409/47762).
 * @method string getKMSRegion() Obtain The region where the KMS service is enabled. When `KMSRegion` is left empty, the current region will be selected by default.  If the current region does not support KMS, you must select another region that does.
For more information on `KMSRegion`, see [Enabling TDE](https://intl.cloud.tencent.com/document/product/409/71749?from_cn_redirect=1).
 * @method void setKMSRegion(string $KMSRegion) Set The region where the KMS service is enabled. When `KMSRegion` is left empty, the current region will be selected by default.  If the current region does not support KMS, you must select another region that does.
For more information on `KMSRegion`, see [Enabling TDE](https://intl.cloud.tencent.com/document/product/409/71749?from_cn_redirect=1).
 * @method string getDBEngine() Obtain Database engines. Valid values:
<li>`postgresql`: TencentDB for PostgreSQL
<li>`mssql_compatible`: MSSQL compatible-TencentDB for PostgreSQL
Default value: `postgresql`.
 * @method void setDBEngine(string $DBEngine) Set Database engines. Valid values:
<li>`postgresql`: TencentDB for PostgreSQL
<li>`mssql_compatible`: MSSQL compatible-TencentDB for PostgreSQL
Default value: `postgresql`.
 * @method string getDBEngineConfig() Obtain Configuration information of database engine in the following format:
{"$key1":"$value1", "$key2":"$value2"}
Valid values:
mssql_compatible engine:
<li>`migrationMode`: Database mode. Valid values: `single-db` (single-database mode), `multi-db` (multi-database mode). Default value: `single-db`.
<li>`defaultLocale`: Default locale, which can’t be modified after the initialization. Default value: `en_US`. Valid values:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".
<li>`serverCollationName`: Default collation name, which can’t be modified after the initialization. Default value: "bbf_unicode_general_ci_as". Valid values: "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
 * @method void setDBEngineConfig(string $DBEngineConfig) Set Configuration information of database engine in the following format:
{"$key1":"$value1", "$key2":"$value2"}
Valid values:
mssql_compatible engine:
<li>`migrationMode`: Database mode. Valid values: `single-db` (single-database mode), `multi-db` (multi-database mode). Default value: `single-db`.
<li>`defaultLocale`: Default locale, which can’t be modified after the initialization. Default value: `en_US`. Valid values:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".
<li>`serverCollationName`: Default collation name, which can’t be modified after the initialization. Default value: "bbf_unicode_general_ci_as". Valid values: "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
 * @method string getSyncMode() Obtain Primary-standby sync mode. Valid values:  
<li>`Semi-sync`
<li>`Async`
Default value for the primary instance: `Semi-sync`.
Default value for the standby instance: `Async`.
 * @method void setSyncMode(string $SyncMode) Set Primary-standby sync mode. Valid values:  
<li>`Semi-sync`
<li>`Async`
Default value for the primary instance: `Semi-sync`.
Default value for the standby instance: `Async`.
 * @method integer getNeedSupportIpv6() Obtain Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var string Primary AZ of the instance in the format of `ap-guangzhou-3`. To support multiple AZs, add information of the primary and standby AZs in the `DBNodeSet.N` field.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     */
    public $Zone;

    /**
     * @var string Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     */
    public $SpecCode;

    /**
     * @var integer Instance storage capacity in GB
     */
    public $Storage;

    /**
     * @var integer The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
     */
    public $InstanceCount;

    /**
     * @var integer Validity period in months.
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
     */
    public $Period;

    /**
     * @var string Instance character set. Valid values: 
<li> `UTF8`
<li> `LATIN1`
     */
    public $Charset;

    /**
     * @var string Username of the instance root account, which has the following rules:
<li>It must contain 1–16 letters , digits, or underscores
<li>It can't be `postgres`.
<li>It can't start with a digit or `pg_`.
<li>All rules are case-insensitive.
     */
    public $AdminName;

    /**
     * @var string Password of the instance root account, which must contain 8-32 characters (above 12 characters preferably). It cannot begin with "/",
and must contain the following 4 types of characters.
<li>Lowercase letters: [a–z]
<li>Uppercase letters: [A–Z]
<li>Digits: 0-9
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
     */
    public $AdminPassword;

    /**
     * @var string The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
When only this parameter is specified, an instance running the latest kernel version of the latest minor version will be created based on this major version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`. If you don't need a minor version, just pass in `DBMajorVersion`.

     */
    public $DBMajorVersion;

    /**
     * @var string Number of the major PostgreSQL community version and minor version, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
If it is specified, an instance running the latest kernel version will be created based on the community minor version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`.
     */
    public $DBVersion;

    /**
     * @var string PostgreSQL kernel version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
PostgreSQL kernel version number. If it is specified, an instance running the specified kernel version will be created. Passing in this parameter in other scenarios is not supported.This parameter is only used to specify a kernel version, which serves no other purposes.

     */
    public $DBKernelVersion;

    /**
     * @var string Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`.
     */
    public $InstanceChargeType;

    /**
     * @var string VPC ID in the format of `vpc-xxxxxxx`. To obtain valid VPC IDs, you can log in to the console or call [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) and look for the `unVpcId` fields in the response.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID in the format of `subnet-xxxxxxxx`, u200cwhich can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     */
    public $SubnetId;

    /**
     * @var array Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     */
    public $DBNodeSet;

    /**
     * @var integer Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li> `1`: Automatic renewal.
Default value: `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. Currently, you can specify only one voucher.
     */
    public $VoucherIds;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Campaign ID
     */
    public $ActivityId;

    /**
     * @var string Instance name, which can contain up to 60 letters, digits, hyphens, and symbols (_-). If this parameter is not specified, "Unnamed" will be displayed by default.

     */
    public $Name;

    /**
     * @var array The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     */
    public $TagList;

    /**
     * @var array Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

     */
    public $SecurityGroupIds;

    /**
     * @var integer Whether to support TDE. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
For more information, see [TDE]u200d(https://www.tencentcloud.com/document/product/409/47765).
     */
    public $NeedSupportTDE;

    /**
     * @var string KeyId of custom key, which is required if you select custom key encryption. It is also the unique CMK identifier.
For more information on creating `KeyId`, see [Enabling TDE](https://www.tencentcloud.com/document/product/409/47762).
     */
    public $KMSKeyId;

    /**
     * @var string The region where the KMS service is enabled. When `KMSRegion` is left empty, the current region will be selected by default.  If the current region does not support KMS, you must select another region that does.
For more information on `KMSRegion`, see [Enabling TDE](https://intl.cloud.tencent.com/document/product/409/71749?from_cn_redirect=1).
     */
    public $KMSRegion;

    /**
     * @var string Database engines. Valid values:
<li>`postgresql`: TencentDB for PostgreSQL
<li>`mssql_compatible`: MSSQL compatible-TencentDB for PostgreSQL
Default value: `postgresql`.
     */
    public $DBEngine;

    /**
     * @var string Configuration information of database engine in the following format:
{"$key1":"$value1", "$key2":"$value2"}
Valid values:
mssql_compatible engine:
<li>`migrationMode`: Database mode. Valid values: `single-db` (single-database mode), `multi-db` (multi-database mode). Default value: `single-db`.
<li>`defaultLocale`: Default locale, which can’t be modified after the initialization. Default value: `en_US`. Valid values:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".
<li>`serverCollationName`: Default collation name, which can’t be modified after the initialization. Default value: "bbf_unicode_general_ci_as". Valid values: "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
     */
    public $DBEngineConfig;

    /**
     * @var string Primary-standby sync mode. Valid values:  
<li>`Semi-sync`
<li>`Async`
Default value for the primary instance: `Semi-sync`.
Default value for the standby instance: `Async`.
     */
    public $SyncMode;

    /**
     * @var integer Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     */
    public $NeedSupportIpv6;

    /**
     * @param string $Zone Primary AZ of the instance in the format of `ap-guangzhou-3`. To support multiple AZs, add information of the primary and standby AZs in the `DBNodeSet.N` field.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     * @param string $SpecCode Purchasable code, which can be obtained from the `SpecCode` field in the return value of the [DescribeClasses](https://intl.cloud.tencent.com/document/api/409/89019?from_cn_redirect=1) API.
     * @param integer $Storage Instance storage capacity in GB
     * @param integer $InstanceCount The number of instances to be purchased at a time. Value range: 1-10. To purchase more than 10 instances each time, you can make multiple calls.
     * @param integer $Period Validity period in months.
<li>Monthly subscription: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`.
<li>Pay-as-you-go: `1`.
     * @param string $Charset Instance character set. Valid values: 
<li> `UTF8`
<li> `LATIN1`
     * @param string $AdminName Username of the instance root account, which has the following rules:
<li>It must contain 1–16 letters , digits, or underscores
<li>It can't be `postgres`.
<li>It can't start with a digit or `pg_`.
<li>All rules are case-insensitive.
     * @param string $AdminPassword Password of the instance root account, which must contain 8-32 characters (above 12 characters preferably). It cannot begin with "/",
and must contain the following 4 types of characters.
<li>Lowercase letters: [a–z]
<li>Uppercase letters: [A–Z]
<li>Digits: 0-9
<li>Symbols: ()`~!@#$%^&*-+=_|{}[]:;'<>,.?/
     * @param string $DBMajorVersion The major PostgreSQL version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API. Valid values: `10`, `11`, `12`, `13`, `14`, `15`.
When only this parameter is specified, an instance running the latest kernel version of the latest minor version will be created based on this major version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`. If you don't need a minor version, just pass in `DBMajorVersion`.

     * @param string $DBVersion Number of the major PostgreSQL community version and minor version, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
If it is specified, an instance running the latest kernel version will be created based on the community minor version.
You must pass in at least one of the following parameters: `DBMajorVersion`, `DBVersion`, DBKernelVersion`.
     * @param string $DBKernelVersion PostgreSQL kernel version number, which can be queried by the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.
PostgreSQL kernel version number. If it is specified, an instance running the specified kernel version will be created. Passing in this parameter in other scenarios is not supported.This parameter is only used to specify a kernel version, which serves no other purposes.

     * @param string $InstanceChargeType Instance billing mode. Valid values:
<li>`PREPAID`: Monthly subscription
<li>`POSTPAID_BY_HOUR`: Pay-as-you-go
Default value: `PREPAID`.
     * @param string $VpcId VPC ID in the format of `vpc-xxxxxxx`. To obtain valid VPC IDs, you can log in to the console or call [DescribeVpcEx](https://intl.cloud.tencent.com/document/api/215/1372?from_cn_redirect=1) and look for the `unVpcId` fields in the response.
     * @param string $SubnetId VPC subnet ID in the format of `subnet-xxxxxxxx`, u200cwhich can be obtained in the console or from the `unSubnetId` field in the return value of the [DescribeSubnets](https://intl.cloud.tencent.com/document/api/215/15784?from_cn_redirect=1) API.
     * @param array $DBNodeSet Deployment information of the instance node, which will display the information of each AZ when the instance node is deployed across multiple AZs.
The information of AZ can be obtained from the `Zone` field in the return value of the [DescribeZones](https://intl.cloud.tencent.com/document/api/409/16769?from_cn_redirect=1) API.
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values:
<li>`0`: Manual renewal.
<li> `1`: Automatic renewal.
Default value: `0`.
     * @param integer $AutoVoucher Whether to use vouchers automatically. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
     * @param array $VoucherIds Voucher ID list. Currently, you can specify only one voucher.
     * @param integer $ProjectId Project ID
     * @param integer $ActivityId Campaign ID
     * @param string $Name Instance name, which can contain up to 60 letters, digits, hyphens, and symbols (_-). If this parameter is not specified, "Unnamed" will be displayed by default.

     * @param array $TagList The information of tags to be bound with the instance, which is left empty by default. This parameter can be obtained from the `Tags` field in the return value of the [DescribeTags](https://intl.cloud.tencent.com/document/api/651/35316?from_cn_redirect=1) API.
     * @param array $SecurityGroupIds Security group of the instance, which can be obtained from the `sgld` field in the return value of the [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808?from_cn_redirect=1) API. If this parameter is not specified, the default security group will be bound.

     * @param integer $NeedSupportTDE Whether to support TDE. Valid values:
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
For more information, see [TDE]u200d(https://www.tencentcloud.com/document/product/409/47765).
     * @param string $KMSKeyId KeyId of custom key, which is required if you select custom key encryption. It is also the unique CMK identifier.
For more information on creating `KeyId`, see [Enabling TDE](https://www.tencentcloud.com/document/product/409/47762).
     * @param string $KMSRegion The region where the KMS service is enabled. When `KMSRegion` is left empty, the current region will be selected by default.  If the current region does not support KMS, you must select another region that does.
For more information on `KMSRegion`, see [Enabling TDE](https://intl.cloud.tencent.com/document/product/409/71749?from_cn_redirect=1).
     * @param string $DBEngine Database engines. Valid values:
<li>`postgresql`: TencentDB for PostgreSQL
<li>`mssql_compatible`: MSSQL compatible-TencentDB for PostgreSQL
Default value: `postgresql`.
     * @param string $DBEngineConfig Configuration information of database engine in the following format:
{"$key1":"$value1", "$key2":"$value2"}
Valid values:
mssql_compatible engine:
<li>`migrationMode`: Database mode. Valid values: `single-db` (single-database mode), `multi-db` (multi-database mode). Default value: `single-db`.
<li>`defaultLocale`: Default locale, which can’t be modified after the initialization. Default value: `en_US`. Valid values:
"af_ZA", "sq_AL", "ar_DZ", "ar_BH", "ar_EG", "ar_IQ", "ar_JO", "ar_KW", "ar_LB", "ar_LY", "ar_MA", "ar_OM", "ar_QA", "ar_SA", "ar_SY", "ar_TN", "ar_AE", "ar_YE", "hy_AM", "az_Cyrl_AZ", "az_Latn_AZ", "eu_ES", "be_BY", "bg_BG", "ca_ES", "zh_HK", "zh_MO", "zh_CN", "zh_SG", "zh_TW", "hr_HR", "cs_CZ", "da_DK", "nl_BE", "nl_NL", "en_AU", "en_BZ", "en_CA", "en_IE", "en_JM", "en_NZ", "en_PH", "en_ZA", "en_TT", "en_GB", "en_US", "en_ZW", "et_EE", "fo_FO", "fa_IR", "fi_FI", "fr_BE", "fr_CA", "fr_FR", "fr_LU", "fr_MC", "fr_CH", "mk_MK", "ka_GE", "de_AT", "de_DE", "de_LI", "de_LU", "de_CH", "el_GR", "gu_IN", "he_IL", "hi_IN", "hu_HU", "is_IS", "id_ID", "it_IT", "it_CH", "ja_JP", "kn_IN", "kok_IN", "ko_KR", "ky_KG", "lv_LV", "lt_LT", "ms_BN", "ms_MY", "mr_IN", "mn_MN", "nb_NO", "nn_NO", "pl_PL", "pt_BR", "pt_PT", "pa_IN", "ro_RO", "ru_RU", "sa_IN", "sr_Cyrl_RS", "sr_Latn_RS", "sk_SK", "sl_SI", "es_AR", "es_BO", "es_CL", "es_CO", "es_CR", "es_DO", "es_EC", "es_SV", "es_GT", "es_HN", "es_MX", "es_NI", "es_PA", "es_PY","es_PE", "es_PR", "es_ES", "es_TRADITIONAL", "es_UY", "es_VE", "sw_KE", "sv_FI", "sv_SE", "tt_RU", "te_IN", "th_TH", "tr_TR", "uk_UA", "ur_IN", "ur_PK", "uz_Cyrl_UZ", "uz_Latn_UZ", "vi_VN".
<li>`serverCollationName`: Default collation name, which can’t be modified after the initialization. Default value: "bbf_unicode_general_ci_as". Valid values: "bbf_unicode_cp1_ci_as", "bbf_unicode_CP1250_ci_as", "bbf_unicode_CP1251_ci_as", "bbf_unicode_cp1253_ci_as", "bbf_unicode_cp1254_ci_as", "bbf_unicode_cp1255_ci_as", "bbf_unicode_cp1256_ci_as", "bbf_unicode_cp1257_ci_as", "bbf_unicode_cp1258_ci_as", "bbf_unicode_cp874_ci_as", "sql_latin1_general_cp1250_ci_as", "sql_latin1_general_cp1251_ci_as", "sql_latin1_general_cp1_ci_as", "sql_latin1_general_cp1253_ci_as", "sql_latin1_general_cp1254_ci_as", "sql_latin1_general_cp1255_ci_as","sql_latin1_general_cp1256_ci_as", "sql_latin1_general_cp1257_ci_as", "sql_latin1_general_cp1258_ci_as", "chinese_prc_ci_as", "cyrillic_general_ci_as", "finnish_swedish_ci_as", "french_ci_as", "japanese_ci_as", "korean_wansung_ci_as", "latin1_general_ci_as", "modern_spanish_ci_as", "polish_ci_as", "thai_ci_as", "traditional_spanish_ci_as", "turkish_ci_as", "ukrainian_ci_as", "vietnamese_ci_as"。
     * @param string $SyncMode Primary-standby sync mode. Valid values:  
<li>`Semi-sync`
<li>`Async`
Default value for the primary instance: `Semi-sync`.
Default value for the standby instance: `Async`.
     * @param integer $NeedSupportIpv6 Whether IPv6 is supported.
<li>`0`: No.
<li>`1`: Yes.
Default value: `0`.
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
    }
}
