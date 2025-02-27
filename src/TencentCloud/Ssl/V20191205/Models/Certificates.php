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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content of the `Certificates` parameter returned by `DescribeCertificates`
 *
 * @method string getOwnerUin() Obtain User uin.
 * @method void setOwnerUin(string $OwnerUin) Set User uin.
 * @method string getProjectId() Obtain Project id.
 * @method void setProjectId(string $ProjectId) Set Project id.
 * @method string getFrom() Obtain Certificate source:.
trustasia.
upload.
wosign.
sheca.
 * @method void setFrom(string $From) Set Certificate source:.
trustasia.
upload.
wosign.
sheca.
 * @method string getPackageType() Obtain Certificate package type:.
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev). 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov) cert. 
10: geotrust enterprise (ov) wildcard cert. 
11: trustasia domain name-based multiple domain names ssl certificate. 
12: trustasia domain name-based (dv) wildcard cert. 
13: trustasia enterprise wildcard (ov) ssl certificate (d3). 
14: trustasia enterprise (ov) ssl certificate (d3). 
15: trustasia enterprise multiple domain names (ov) ssl certificate (d3). 
16: trustasia enhanced (ev) ssl certificate (d3). 
17: trustasia enhanced multiple domain names (ev) ssl certificate (d3). 
18: globalsign enterprise (ov) ssl certificate. 
19: globalsign enterprise wildcard (ov) ssl certificate. 
20: globalsign enhanced (ev) ssl certificate. 
21: trustasia enterprise wildcard multiple domain names (ov) ssl certificate (d3). 
22: globalsign enterprise multiple domain names (ov) ssl certificate. 
23: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
24: globalsign enhanced multiple domain name (ev) ssl certificate.
25: wotrus domain name cert.
26: wotrus domain name multiple domain name cert.
27: wotrus domain name wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name certificate.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - type certificate.
34: wotrus-national cryptography domain certificate (multiple domain names).
35: wotrus-national cryptography domain certificate (wildcard).
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus - enhanced national cryptography certificate.
41: wotrus - enhanced national cryptography certificate (multiple domain names).
42: trustasia - domain name type certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: DNSPod - enhanced (ev) ssl certificate.
47: DNSPod - enhanced (ev) multiple domain names ssl certificate.
48: DNSPod - domain name-based (dv) ssl certificate.
49: DNSPod - domain name-based (dv) wildcard ssl certificate.
50: DNSPod - domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional edition multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional edition multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise wildcard (ov).
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise pro multiple domain names (ov pro).
93: securesite enterprise multiple domain names (ov).
94: securesite enhanced pro multiple domain names (ev pro).
95: securesite enhanced multiple domain names (ev).
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise ov ssl certificate for multiple domain names.
100: cfca ov wildcard ssl certificate.
101: cfca enhanced (ev) ssl certificate.
 * @method void setPackageType(string $PackageType) Set Certificate package type:.
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev). 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov) cert. 
10: geotrust enterprise (ov) wildcard cert. 
11: trustasia domain name-based multiple domain names ssl certificate. 
12: trustasia domain name-based (dv) wildcard cert. 
13: trustasia enterprise wildcard (ov) ssl certificate (d3). 
14: trustasia enterprise (ov) ssl certificate (d3). 
15: trustasia enterprise multiple domain names (ov) ssl certificate (d3). 
16: trustasia enhanced (ev) ssl certificate (d3). 
17: trustasia enhanced multiple domain names (ev) ssl certificate (d3). 
18: globalsign enterprise (ov) ssl certificate. 
19: globalsign enterprise wildcard (ov) ssl certificate. 
20: globalsign enhanced (ev) ssl certificate. 
21: trustasia enterprise wildcard multiple domain names (ov) ssl certificate (d3). 
22: globalsign enterprise multiple domain names (ov) ssl certificate. 
23: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
24: globalsign enhanced multiple domain name (ev) ssl certificate.
25: wotrus domain name cert.
26: wotrus domain name multiple domain name cert.
27: wotrus domain name wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name certificate.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - type certificate.
34: wotrus-national cryptography domain certificate (multiple domain names).
35: wotrus-national cryptography domain certificate (wildcard).
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus - enhanced national cryptography certificate.
41: wotrus - enhanced national cryptography certificate (multiple domain names).
42: trustasia - domain name type certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: DNSPod - enhanced (ev) ssl certificate.
47: DNSPod - enhanced (ev) multiple domain names ssl certificate.
48: DNSPod - domain name-based (dv) ssl certificate.
49: DNSPod - domain name-based (dv) wildcard ssl certificate.
50: DNSPod - domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional edition multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional edition multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise wildcard (ov).
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise pro multiple domain names (ov pro).
93: securesite enterprise multiple domain names (ov).
94: securesite enhanced pro multiple domain names (ev pro).
95: securesite enhanced multiple domain names (ev).
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise ov ssl certificate for multiple domain names.
100: cfca ov wildcard ssl certificate.
101: cfca enhanced (ev) ssl certificate.
 * @method string getCertificateType() Obtain Certificate type. ca = client certificate; svr = server certificate.
 * @method void setCertificateType(string $CertificateType) Set Certificate type. ca = client certificate; svr = server certificate.
 * @method string getProductZhName() Obtain Certificate product name.
 * @method void setProductZhName(string $ProductZhName) Set Certificate product name.
 * @method string getDomain() Obtain Primary domain name.
 * @method void setDomain(string $Domain) Set Primary domain name.
 * @method string getAlias() Obtain Remark name.
 * @method void setAlias(string $Alias) Set Remark name.
 * @method integer getStatus() Obtain Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns record added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending documentation submission, 14 = certificate refunded, 15 = certificate migration in progress.
 * @method void setStatus(integer $Status) Set Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns record added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending documentation submission, 14 = certificate refunded, 15 = certificate migration in progress.
 * @method CertificateExtra getCertificateExtra() Obtain Certificate extended information.
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) Set Certificate extended information.
 * @method string getVulnerabilityStatus() Obtain Vulnerability scanning status: INACTIVE = not enabled, ACTIVE = enabled.
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) Set Vulnerability scanning status: INACTIVE = not enabled, ACTIVE = enabled.
 * @method string getStatusMsg() Obtain Status information.
 * @method void setStatusMsg(string $StatusMsg) Set Status information.
 * @method string getVerifyType() Obtain Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy verification.
 * @method void setVerifyType(string $VerifyType) Set Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy verification.
 * @method string getCertBeginTime() Obtain Certificate validation time.
 * @method void setCertBeginTime(string $CertBeginTime) Set Certificate validation time.
 * @method string getCertEndTime() Obtain Certificate expiration time.
 * @method void setCertEndTime(string $CertEndTime) Set Certificate expiration time.
 * @method string getValidityPeriod() Obtain Certificate validity period (month).
 * @method void setValidityPeriod(string $ValidityPeriod) Set Certificate validity period (month).
 * @method string getInsertTime() Obtain Creation time.
 * @method void setInsertTime(string $InsertTime) Set Creation time.
 * @method string getCertificateId() Obtain Certificate id.
 * @method void setCertificateId(string $CertificateId) Set Certificate id.
 * @method array getSubjectAltName() Obtain Multiple domain names contained in the certificate (including the primary domain name).
 * @method void setSubjectAltName(array $SubjectAltName) Set Multiple domain names contained in the certificate (including the primary domain name).
 * @method string getPackageTypeName() Obtain Certificate type name.
 * @method void setPackageTypeName(string $PackageTypeName) Set Certificate type name.
 * @method string getStatusName() Obtain Status name.
 * @method void setStatusName(string $StatusName) Set Status name.
 * @method boolean getIsVip() Obtain Specifies whether the customer is a vip customer. true indicates yes and false indicates no.
 * @method void setIsVip(boolean $IsVip) Set Specifies whether the customer is a vip customer. true indicates yes and false indicates no.
 * @method boolean getIsDv() Obtain Specifies whether it is a dv version certificate. true indicates yes and false indicates no.
 * @method void setIsDv(boolean $IsDv) Set Specifies whether it is a dv version certificate. true indicates yes and false indicates no.
 * @method boolean getIsWildcard() Obtain Specifies whether it is a wildcard domain name certificate. true indicates yes and false indicates no.
 * @method void setIsWildcard(boolean $IsWildcard) Set Specifies whether it is a wildcard domain name certificate. true indicates yes and false indicates no.
 * @method boolean getIsVulnerability() Obtain Whether the vulnerability scanning feature is enabled.
 * @method void setIsVulnerability(boolean $IsVulnerability) Set Whether the vulnerability scanning feature is enabled.
 * @method boolean getRenewAble() Obtain Whether it is renewable.
 * @method void setRenewAble(boolean $RenewAble) Set Whether it is renewable.
 * @method ProjectInfo getProjectInfo() Obtain Project information.
 * @method void setProjectInfo(ProjectInfo $ProjectInfo) Set Project information.
 * @method array getBoundResource() Obtain Associated cloud resources are temporarily unavailable.
 * @method void setBoundResource(array $BoundResource) Set Associated cloud resources are temporarily unavailable.
 * @method boolean getDeployable() Obtain Whether it can be deployed.
 * @method void setDeployable(boolean $Deployable) Set Whether it can be deployed.
 * @method array getTags() Obtain Tag list.
 * @method void setTags(array $Tags) Set Tag list.
 * @method boolean getIsIgnore() Obtain Whether expiration notice has been ignored.
 * @method void setIsIgnore(boolean $IsIgnore) Set Whether expiration notice has been ignored.
 * @method boolean getIsSM() Obtain Whether it is a China SM certificate.
 * @method void setIsSM(boolean $IsSM) Set Whether it is a China SM certificate.
 * @method string getEncryptAlgorithm() Obtain Certificate algorithm.
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) Set Certificate algorithm.
 * @method array getCAEncryptAlgorithms() Obtain Encryption algorithm for upload ca certificate.
 * @method void setCAEncryptAlgorithms(array $CAEncryptAlgorithms) Set Encryption algorithm for upload ca certificate.
 * @method array getCAEndTimes() Obtain Expiration time for upload ca certificate.
 * @method void setCAEndTimes(array $CAEndTimes) Set Expiration time for upload ca certificate.
 * @method array getCACommonNames() Obtain Common name of the upload ca certificate.
 * @method void setCACommonNames(array $CACommonNames) Set Common name of the upload ca certificate.
 * @method PreAuditInfo getPreAuditInfo() Obtain Certificate prereview information.
 * @method void setPreAuditInfo(PreAuditInfo $PreAuditInfo) Set Certificate prereview information.
 * @method integer getAutoRenewFlag() Obtain Whether to auto-renew.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Whether to auto-renew.
 * @method integer getHostingStatus() Obtain Hosting status: 0, hosting; 5, resource replacement; 10, hosting completed; -1, not hosted. 
 * @method void setHostingStatus(integer $HostingStatus) Set Hosting status: 0, hosting; 5, resource replacement; 10, hosting completed; -1, not hosted. 
 * @method string getHostingCompleteTime() Obtain Hosting completion time.
 * @method void setHostingCompleteTime(string $HostingCompleteTime) Set Hosting completion time.
 * @method string getHostingRenewCertId() Obtain Manage the new certificate id.
 * @method void setHostingRenewCertId(string $HostingRenewCertId) Set Manage the new certificate id.
 * @method string getHasRenewOrder() Obtain Existing renewal certificate id.
 * @method void setHasRenewOrder(string $HasRenewOrder) Set Existing renewal certificate id.
 * @method boolean getReplaceOriCertIsDelete() Obtain Indicates whether the original certificate is deleted during reissue.
 * @method void setReplaceOriCertIsDelete(boolean $ReplaceOriCertIsDelete) Set Indicates whether the original certificate is deleted during reissue.
 * @method boolean getIsExpiring() Obtain Indicates whether it is about to expire. a certificate is about to expire if it will expire within 30 days.
 * @method void setIsExpiring(boolean $IsExpiring) Set Indicates whether it is about to expire. a certificate is about to expire if it will expire within 30 days.
 * @method string getDVAuthDeadline() Obtain Add validation expiration date for DV certificate
 * @method void setDVAuthDeadline(string $DVAuthDeadline) Set Add validation expiration date for DV certificate
 * @method string getValidationPassedTime() Obtain Domain verification passed time.
 * @method void setValidationPassedTime(string $ValidationPassedTime) Set Domain verification passed time.
 * @method array getCertSANs() Obtain Multiple domain names associated with the certificate.
 * @method void setCertSANs(array $CertSANs) Set Multiple domain names associated with the certificate.
 * @method string getAwaitingValidationMsg() Obtain Domain verification rejection information.
 * @method void setAwaitingValidationMsg(string $AwaitingValidationMsg) Set Domain verification rejection information.
 * @method boolean getAllowDownload() Obtain Whether to allow downloading.
 * @method void setAllowDownload(boolean $AllowDownload) Set Whether to allow downloading.
 * @method boolean getIsDNSPODResolve() Obtain Whether all certificate domain names are managed and resolved by dnspod.
 * @method void setIsDNSPODResolve(boolean $IsDNSPODResolve) Set Whether all certificate domain names are managed and resolved by dnspod.
 * @method boolean getIsPackage() Obtain Whether the certificate is purchased with benefit points.
 * @method void setIsPackage(boolean $IsPackage) Set Whether the certificate is purchased with benefit points.
 * @method boolean getKeyPasswordCustomFlag() Obtain Whether there is a private key password.
 * @method void setKeyPasswordCustomFlag(boolean $KeyPasswordCustomFlag) Set Whether there is a private key password.
 * @method SupportDownloadType getSupportDownloadType() Obtain Types of web servers supported for download: nginx, apache, iis, tomcat, jks, root, other.
 * @method void setSupportDownloadType(SupportDownloadType $SupportDownloadType) Set Types of web servers supported for download: nginx, apache, iis, tomcat, jks, root, other.
 * @method string getCertRevokedTime() Obtain Certificate revocation completion time.
 * @method void setCertRevokedTime(string $CertRevokedTime) Set Certificate revocation completion time.
 * @method array getHostingResourceTypes() Obtain Hosted resource type list.
 * @method void setHostingResourceTypes(array $HostingResourceTypes) Set Hosted resource type list.
 * @method HostingConfig getHostingConfig() Obtain Managed configuration information.
 * @method void setHostingConfig(HostingConfig $HostingConfig) Set Managed configuration information.
 */
class Certificates extends AbstractModel
{
    /**
     * @var string User uin.
     */
    public $OwnerUin;

    /**
     * @var string Project id.
     */
    public $ProjectId;

    /**
     * @var string Certificate source:.
trustasia.
upload.
wosign.
sheca.
     */
    public $From;

    /**
     * @var string Certificate package type:.
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev). 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov) cert. 
10: geotrust enterprise (ov) wildcard cert. 
11: trustasia domain name-based multiple domain names ssl certificate. 
12: trustasia domain name-based (dv) wildcard cert. 
13: trustasia enterprise wildcard (ov) ssl certificate (d3). 
14: trustasia enterprise (ov) ssl certificate (d3). 
15: trustasia enterprise multiple domain names (ov) ssl certificate (d3). 
16: trustasia enhanced (ev) ssl certificate (d3). 
17: trustasia enhanced multiple domain names (ev) ssl certificate (d3). 
18: globalsign enterprise (ov) ssl certificate. 
19: globalsign enterprise wildcard (ov) ssl certificate. 
20: globalsign enhanced (ev) ssl certificate. 
21: trustasia enterprise wildcard multiple domain names (ov) ssl certificate (d3). 
22: globalsign enterprise multiple domain names (ov) ssl certificate. 
23: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
24: globalsign enhanced multiple domain name (ev) ssl certificate.
25: wotrus domain name cert.
26: wotrus domain name multiple domain name cert.
27: wotrus domain name wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name certificate.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - type certificate.
34: wotrus-national cryptography domain certificate (multiple domain names).
35: wotrus-national cryptography domain certificate (wildcard).
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus - enhanced national cryptography certificate.
41: wotrus - enhanced national cryptography certificate (multiple domain names).
42: trustasia - domain name type certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: DNSPod - enhanced (ev) ssl certificate.
47: DNSPod - enhanced (ev) multiple domain names ssl certificate.
48: DNSPod - domain name-based (dv) ssl certificate.
49: DNSPod - domain name-based (dv) wildcard ssl certificate.
50: DNSPod - domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional edition multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional edition multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise wildcard (ov).
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise pro multiple domain names (ov pro).
93: securesite enterprise multiple domain names (ov).
94: securesite enhanced pro multiple domain names (ev pro).
95: securesite enhanced multiple domain names (ev).
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise ov ssl certificate for multiple domain names.
100: cfca ov wildcard ssl certificate.
101: cfca enhanced (ev) ssl certificate.
     */
    public $PackageType;

    /**
     * @var string Certificate type. ca = client certificate; svr = server certificate.
     */
    public $CertificateType;

    /**
     * @var string Certificate product name.
     */
    public $ProductZhName;

    /**
     * @var string Primary domain name.
     */
    public $Domain;

    /**
     * @var string Remark name.
     */
    public $Alias;

    /**
     * @var integer Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns record added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending documentation submission, 14 = certificate refunded, 15 = certificate migration in progress.
     */
    public $Status;

    /**
     * @var CertificateExtra Certificate extended information.
     */
    public $CertificateExtra;

    /**
     * @var string Vulnerability scanning status: INACTIVE = not enabled, ACTIVE = enabled.
     */
    public $VulnerabilityStatus;

    /**
     * @var string Status information.
     */
    public $StatusMsg;

    /**
     * @var string Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy verification.
     */
    public $VerifyType;

    /**
     * @var string Certificate validation time.
     */
    public $CertBeginTime;

    /**
     * @var string Certificate expiration time.
     */
    public $CertEndTime;

    /**
     * @var string Certificate validity period (month).
     */
    public $ValidityPeriod;

    /**
     * @var string Creation time.
     */
    public $InsertTime;

    /**
     * @var string Certificate id.
     */
    public $CertificateId;

    /**
     * @var array Multiple domain names contained in the certificate (including the primary domain name).
     */
    public $SubjectAltName;

    /**
     * @var string Certificate type name.
     */
    public $PackageTypeName;

    /**
     * @var string Status name.
     */
    public $StatusName;

    /**
     * @var boolean Specifies whether the customer is a vip customer. true indicates yes and false indicates no.
     */
    public $IsVip;

    /**
     * @var boolean Specifies whether it is a dv version certificate. true indicates yes and false indicates no.
     */
    public $IsDv;

    /**
     * @var boolean Specifies whether it is a wildcard domain name certificate. true indicates yes and false indicates no.
     */
    public $IsWildcard;

    /**
     * @var boolean Whether the vulnerability scanning feature is enabled.
     */
    public $IsVulnerability;

    /**
     * @var boolean Whether it is renewable.
     */
    public $RenewAble;

    /**
     * @var ProjectInfo Project information.
     */
    public $ProjectInfo;

    /**
     * @var array Associated cloud resources are temporarily unavailable.
     */
    public $BoundResource;

    /**
     * @var boolean Whether it can be deployed.
     */
    public $Deployable;

    /**
     * @var array Tag list.
     */
    public $Tags;

    /**
     * @var boolean Whether expiration notice has been ignored.
     */
    public $IsIgnore;

    /**
     * @var boolean Whether it is a China SM certificate.
     */
    public $IsSM;

    /**
     * @var string Certificate algorithm.
     */
    public $EncryptAlgorithm;

    /**
     * @var array Encryption algorithm for upload ca certificate.
     */
    public $CAEncryptAlgorithms;

    /**
     * @var array Expiration time for upload ca certificate.
     */
    public $CAEndTimes;

    /**
     * @var array Common name of the upload ca certificate.
     */
    public $CACommonNames;

    /**
     * @var PreAuditInfo Certificate prereview information.
     */
    public $PreAuditInfo;

    /**
     * @var integer Whether to auto-renew.
     */
    public $AutoRenewFlag;

    /**
     * @var integer Hosting status: 0, hosting; 5, resource replacement; 10, hosting completed; -1, not hosted. 
     */
    public $HostingStatus;

    /**
     * @var string Hosting completion time.
     */
    public $HostingCompleteTime;

    /**
     * @var string Manage the new certificate id.
     */
    public $HostingRenewCertId;

    /**
     * @var string Existing renewal certificate id.
     */
    public $HasRenewOrder;

    /**
     * @var boolean Indicates whether the original certificate is deleted during reissue.
     */
    public $ReplaceOriCertIsDelete;

    /**
     * @var boolean Indicates whether it is about to expire. a certificate is about to expire if it will expire within 30 days.
     */
    public $IsExpiring;

    /**
     * @var string Add validation expiration date for DV certificate
     */
    public $DVAuthDeadline;

    /**
     * @var string Domain verification passed time.
     */
    public $ValidationPassedTime;

    /**
     * @var array Multiple domain names associated with the certificate.
     */
    public $CertSANs;

    /**
     * @var string Domain verification rejection information.
     */
    public $AwaitingValidationMsg;

    /**
     * @var boolean Whether to allow downloading.
     */
    public $AllowDownload;

    /**
     * @var boolean Whether all certificate domain names are managed and resolved by dnspod.
     */
    public $IsDNSPODResolve;

    /**
     * @var boolean Whether the certificate is purchased with benefit points.
     */
    public $IsPackage;

    /**
     * @var boolean Whether there is a private key password.
     */
    public $KeyPasswordCustomFlag;

    /**
     * @var SupportDownloadType Types of web servers supported for download: nginx, apache, iis, tomcat, jks, root, other.
     */
    public $SupportDownloadType;

    /**
     * @var string Certificate revocation completion time.
     */
    public $CertRevokedTime;

    /**
     * @var array Hosted resource type list.
     */
    public $HostingResourceTypes;

    /**
     * @var HostingConfig Managed configuration information.
     */
    public $HostingConfig;

    /**
     * @param string $OwnerUin User uin.
     * @param string $ProjectId Project id.
     * @param string $From Certificate source:.
trustasia.
upload.
wosign.
sheca.
     * @param string $PackageType Certificate package type:.
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev). 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov) cert. 
10: geotrust enterprise (ov) wildcard cert. 
11: trustasia domain name-based multiple domain names ssl certificate. 
12: trustasia domain name-based (dv) wildcard cert. 
13: trustasia enterprise wildcard (ov) ssl certificate (d3). 
14: trustasia enterprise (ov) ssl certificate (d3). 
15: trustasia enterprise multiple domain names (ov) ssl certificate (d3). 
16: trustasia enhanced (ev) ssl certificate (d3). 
17: trustasia enhanced multiple domain names (ev) ssl certificate (d3). 
18: globalsign enterprise (ov) ssl certificate. 
19: globalsign enterprise wildcard (ov) ssl certificate. 
20: globalsign enhanced (ev) ssl certificate. 
21: trustasia enterprise wildcard multiple domain names (ov) ssl certificate (d3). 
22: globalsign enterprise multiple domain names (ov) ssl certificate. 
23: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
24: globalsign enhanced multiple domain name (ev) ssl certificate.
25: wotrus domain name cert.
26: wotrus domain name multiple domain name cert.
27: wotrus domain name wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name certificate.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - type certificate.
34: wotrus-national cryptography domain certificate (multiple domain names).
35: wotrus-national cryptography domain certificate (wildcard).
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus - enhanced national cryptography certificate.
41: wotrus - enhanced national cryptography certificate (multiple domain names).
42: trustasia - domain name type certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: DNSPod - enhanced (ev) ssl certificate.
47: DNSPod - enhanced (ev) multiple domain names ssl certificate.
48: DNSPod - domain name-based (dv) ssl certificate.
49: DNSPod - domain name-based (dv) wildcard ssl certificate.
50: DNSPod - domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional edition multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional edition multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise wildcard (ov).
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise pro multiple domain names (ov pro).
93: securesite enterprise multiple domain names (ov).
94: securesite enhanced pro multiple domain names (ev pro).
95: securesite enhanced multiple domain names (ev).
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise ov ssl certificate for multiple domain names.
100: cfca ov wildcard ssl certificate.
101: cfca enhanced (ev) ssl certificate.
     * @param string $CertificateType Certificate type. ca = client certificate; svr = server certificate.
     * @param string $ProductZhName Certificate product name.
     * @param string $Domain Primary domain name.
     * @param string $Alias Remark name.
     * @param integer $Status Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns record added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending documentation submission, 14 = certificate refunded, 15 = certificate migration in progress.
     * @param CertificateExtra $CertificateExtra Certificate extended information.
     * @param string $VulnerabilityStatus Vulnerability scanning status: INACTIVE = not enabled, ACTIVE = enabled.
     * @param string $StatusMsg Status information.
     * @param string $VerifyType Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy verification.
     * @param string $CertBeginTime Certificate validation time.
     * @param string $CertEndTime Certificate expiration time.
     * @param string $ValidityPeriod Certificate validity period (month).
     * @param string $InsertTime Creation time.
     * @param string $CertificateId Certificate id.
     * @param array $SubjectAltName Multiple domain names contained in the certificate (including the primary domain name).
     * @param string $PackageTypeName Certificate type name.
     * @param string $StatusName Status name.
     * @param boolean $IsVip Specifies whether the customer is a vip customer. true indicates yes and false indicates no.
     * @param boolean $IsDv Specifies whether it is a dv version certificate. true indicates yes and false indicates no.
     * @param boolean $IsWildcard Specifies whether it is a wildcard domain name certificate. true indicates yes and false indicates no.
     * @param boolean $IsVulnerability Whether the vulnerability scanning feature is enabled.
     * @param boolean $RenewAble Whether it is renewable.
     * @param ProjectInfo $ProjectInfo Project information.
     * @param array $BoundResource Associated cloud resources are temporarily unavailable.
     * @param boolean $Deployable Whether it can be deployed.
     * @param array $Tags Tag list.
     * @param boolean $IsIgnore Whether expiration notice has been ignored.
     * @param boolean $IsSM Whether it is a China SM certificate.
     * @param string $EncryptAlgorithm Certificate algorithm.
     * @param array $CAEncryptAlgorithms Encryption algorithm for upload ca certificate.
     * @param array $CAEndTimes Expiration time for upload ca certificate.
     * @param array $CACommonNames Common name of the upload ca certificate.
     * @param PreAuditInfo $PreAuditInfo Certificate prereview information.
     * @param integer $AutoRenewFlag Whether to auto-renew.
     * @param integer $HostingStatus Hosting status: 0, hosting; 5, resource replacement; 10, hosting completed; -1, not hosted. 
     * @param string $HostingCompleteTime Hosting completion time.
     * @param string $HostingRenewCertId Manage the new certificate id.
     * @param string $HasRenewOrder Existing renewal certificate id.
     * @param boolean $ReplaceOriCertIsDelete Indicates whether the original certificate is deleted during reissue.
     * @param boolean $IsExpiring Indicates whether it is about to expire. a certificate is about to expire if it will expire within 30 days.
     * @param string $DVAuthDeadline Add validation expiration date for DV certificate
     * @param string $ValidationPassedTime Domain verification passed time.
     * @param array $CertSANs Multiple domain names associated with the certificate.
     * @param string $AwaitingValidationMsg Domain verification rejection information.
     * @param boolean $AllowDownload Whether to allow downloading.
     * @param boolean $IsDNSPODResolve Whether all certificate domain names are managed and resolved by dnspod.
     * @param boolean $IsPackage Whether the certificate is purchased with benefit points.
     * @param boolean $KeyPasswordCustomFlag Whether there is a private key password.
     * @param SupportDownloadType $SupportDownloadType Types of web servers supported for download: nginx, apache, iis, tomcat, jks, root, other.
     * @param string $CertRevokedTime Certificate revocation completion time.
     * @param array $HostingResourceTypes Hosted resource type list.
     * @param HostingConfig $HostingConfig Managed configuration information.
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
        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("ProductZhName",$param) and $param["ProductZhName"] !== null) {
            $this->ProductZhName = $param["ProductZhName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertificateExtra",$param) and $param["CertificateExtra"] !== null) {
            $this->CertificateExtra = new CertificateExtra();
            $this->CertificateExtra->deserialize($param["CertificateExtra"]);
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
        }

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("CertBeginTime",$param) and $param["CertBeginTime"] !== null) {
            $this->CertBeginTime = $param["CertBeginTime"];
        }

        if (array_key_exists("CertEndTime",$param) and $param["CertEndTime"] !== null) {
            $this->CertEndTime = $param["CertEndTime"];
        }

        if (array_key_exists("ValidityPeriod",$param) and $param["ValidityPeriod"] !== null) {
            $this->ValidityPeriod = $param["ValidityPeriod"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("PackageTypeName",$param) and $param["PackageTypeName"] !== null) {
            $this->PackageTypeName = $param["PackageTypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
        }

        if (array_key_exists("ProjectInfo",$param) and $param["ProjectInfo"] !== null) {
            $this->ProjectInfo = new ProjectInfo();
            $this->ProjectInfo->deserialize($param["ProjectInfo"]);
        }

        if (array_key_exists("BoundResource",$param) and $param["BoundResource"] !== null) {
            $this->BoundResource = $param["BoundResource"];
        }

        if (array_key_exists("Deployable",$param) and $param["Deployable"] !== null) {
            $this->Deployable = $param["Deployable"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("IsIgnore",$param) and $param["IsIgnore"] !== null) {
            $this->IsIgnore = $param["IsIgnore"];
        }

        if (array_key_exists("IsSM",$param) and $param["IsSM"] !== null) {
            $this->IsSM = $param["IsSM"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("CAEncryptAlgorithms",$param) and $param["CAEncryptAlgorithms"] !== null) {
            $this->CAEncryptAlgorithms = $param["CAEncryptAlgorithms"];
        }

        if (array_key_exists("CAEndTimes",$param) and $param["CAEndTimes"] !== null) {
            $this->CAEndTimes = $param["CAEndTimes"];
        }

        if (array_key_exists("CACommonNames",$param) and $param["CACommonNames"] !== null) {
            $this->CACommonNames = $param["CACommonNames"];
        }

        if (array_key_exists("PreAuditInfo",$param) and $param["PreAuditInfo"] !== null) {
            $this->PreAuditInfo = new PreAuditInfo();
            $this->PreAuditInfo->deserialize($param["PreAuditInfo"]);
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("HostingStatus",$param) and $param["HostingStatus"] !== null) {
            $this->HostingStatus = $param["HostingStatus"];
        }

        if (array_key_exists("HostingCompleteTime",$param) and $param["HostingCompleteTime"] !== null) {
            $this->HostingCompleteTime = $param["HostingCompleteTime"];
        }

        if (array_key_exists("HostingRenewCertId",$param) and $param["HostingRenewCertId"] !== null) {
            $this->HostingRenewCertId = $param["HostingRenewCertId"];
        }

        if (array_key_exists("HasRenewOrder",$param) and $param["HasRenewOrder"] !== null) {
            $this->HasRenewOrder = $param["HasRenewOrder"];
        }

        if (array_key_exists("ReplaceOriCertIsDelete",$param) and $param["ReplaceOriCertIsDelete"] !== null) {
            $this->ReplaceOriCertIsDelete = $param["ReplaceOriCertIsDelete"];
        }

        if (array_key_exists("IsExpiring",$param) and $param["IsExpiring"] !== null) {
            $this->IsExpiring = $param["IsExpiring"];
        }

        if (array_key_exists("DVAuthDeadline",$param) and $param["DVAuthDeadline"] !== null) {
            $this->DVAuthDeadline = $param["DVAuthDeadline"];
        }

        if (array_key_exists("ValidationPassedTime",$param) and $param["ValidationPassedTime"] !== null) {
            $this->ValidationPassedTime = $param["ValidationPassedTime"];
        }

        if (array_key_exists("CertSANs",$param) and $param["CertSANs"] !== null) {
            $this->CertSANs = $param["CertSANs"];
        }

        if (array_key_exists("AwaitingValidationMsg",$param) and $param["AwaitingValidationMsg"] !== null) {
            $this->AwaitingValidationMsg = $param["AwaitingValidationMsg"];
        }

        if (array_key_exists("AllowDownload",$param) and $param["AllowDownload"] !== null) {
            $this->AllowDownload = $param["AllowDownload"];
        }

        if (array_key_exists("IsDNSPODResolve",$param) and $param["IsDNSPODResolve"] !== null) {
            $this->IsDNSPODResolve = $param["IsDNSPODResolve"];
        }

        if (array_key_exists("IsPackage",$param) and $param["IsPackage"] !== null) {
            $this->IsPackage = $param["IsPackage"];
        }

        if (array_key_exists("KeyPasswordCustomFlag",$param) and $param["KeyPasswordCustomFlag"] !== null) {
            $this->KeyPasswordCustomFlag = $param["KeyPasswordCustomFlag"];
        }

        if (array_key_exists("SupportDownloadType",$param) and $param["SupportDownloadType"] !== null) {
            $this->SupportDownloadType = new SupportDownloadType();
            $this->SupportDownloadType->deserialize($param["SupportDownloadType"]);
        }

        if (array_key_exists("CertRevokedTime",$param) and $param["CertRevokedTime"] !== null) {
            $this->CertRevokedTime = $param["CertRevokedTime"];
        }

        if (array_key_exists("HostingResourceTypes",$param) and $param["HostingResourceTypes"] !== null) {
            $this->HostingResourceTypes = $param["HostingResourceTypes"];
        }

        if (array_key_exists("HostingConfig",$param) and $param["HostingConfig"] !== null) {
            $this->HostingConfig = new HostingConfig();
            $this->HostingConfig->deserialize($param["HostingConfig"]);
        }
    }
}
