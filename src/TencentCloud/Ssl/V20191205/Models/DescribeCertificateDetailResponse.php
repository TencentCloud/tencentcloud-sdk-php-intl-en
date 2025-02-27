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
 * DescribeCertificateDetail response structure.
 *
 * @method string getOwnerUin() Obtain Certificate belonging to user main account uin.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set Certificate belonging to user main account uin.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFrom() Obtain Certificate source:.
trustAsia.
upload.
wosign.
sheca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFrom(string $From) Set Certificate source:.
trustAsia.
upload.
wosign.
sheca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateType() Obtain Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateType(string $CertificateType) Set Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPackageType() Obtain Certificate package type:.
null: user uploads a certificate (no package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise version (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise pro (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov). 
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
24: globalsign enhanced multiple domain names (ev) ssl certificate.
25: wotrus domain cert.
26: wotrus multi-domain cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi-domain cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi-domain name certificate.
33: wotrus-national cryptography domain name certificate.
34: wotrus-national cryptography domain name certificate (multiple domain names).
35: wotrus-national cryptography wildcard certificate.
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus-national cryptography enhanced certificate.
41: wotrus - national cryptography enhanced certificate (multiple domain names).
42: trustasia - domain name certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: dnspod-enhanced (ev) ssl certificate.
47: dnspod-enhanced (ev) multiple domain names ssl certificate.
48: dnspod-domain name-based (dv) ssl certificate.
49: dnspod-domain name-based (dv) wildcard ssl certificate.
50: dnspod-domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional version multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional version multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise (ov) wildcard.
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise ov pro for multiple domain names.
93: securesite enterprise for multiple domain names (ov).
94: securesite ev pro for multiple domain names.
95: securesite ev for multiple domain names.
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set Certificate package type:.
null: user uploads a certificate (no package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise version (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise pro (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov). 
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
24: globalsign enhanced multiple domain names (ev) ssl certificate.
25: wotrus domain cert.
26: wotrus multi-domain cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi-domain cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi-domain name certificate.
33: wotrus-national cryptography domain name certificate.
34: wotrus-national cryptography domain name certificate (multiple domain names).
35: wotrus-national cryptography wildcard certificate.
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus-national cryptography enhanced certificate.
41: wotrus - national cryptography enhanced certificate (multiple domain names).
42: trustasia - domain name certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: dnspod-enhanced (ev) ssl certificate.
47: dnspod-enhanced (ev) multiple domain names ssl certificate.
48: dnspod-domain name-based (dv) ssl certificate.
49: dnspod-domain name-based (dv) wildcard ssl certificate.
50: dnspod-domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional version multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional version multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise (ov) wildcard.
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise ov pro for multiple domain names.
93: securesite enterprise for multiple domain names (ov).
94: securesite ev pro for multiple domain names.
95: securesite ev for multiple domain names.
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProductZhName() Obtain Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProductZhName(string $ProductZhName) Set Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Certificate binds to a common name domain.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Certificate binds to a common name domain.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain Alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = automatically added dns records, 5 = enterprise certificate, pending document submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = automatically added dns records, 5 = enterprise certificate, pending document submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusMsg() Obtain Status information. valid values:.
//Common status information.
PRE-REVIEWING: in prereview.
LEGAL-REVIEWING: in legal review.
CA-REVIEWING: in ca review.
PENDING-DCV: in domain verification.
WAIT-ISSUE: waiting for issue (domain verification passed).
Certificate review failure status information.
1. order review failed.
2. ca review failed, and the domain name did not pass the security review.
3. domain name verification timed out, and the order was automatically closed. please reapply for the certificate.
4. the certificate information did not pass the review of the certificate ca agency. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusMsg(string $StatusMsg) Set Status information. valid values:.
//Common status information.
PRE-REVIEWING: in prereview.
LEGAL-REVIEWING: in legal review.
CA-REVIEWING: in ca review.
PENDING-DCV: in domain verification.
WAIT-ISSUE: waiting for issue (domain verification passed).
Certificate review failure status information.
1. order review failed.
2. ca review failed, and the domain name did not pass the security review.
3. domain name verification timed out, and the order was automatically closed. please reapply for the certificate.
4. the certificate information did not pass the review of the certificate ca agency. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyType() Obtain Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyType(string $VerifyType) Set Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVulnerabilityStatus() Obtain Vulnerability scanning status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVulnerabilityStatus(string $VulnerabilityStatus) Set Vulnerability scanning status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertBeginTime() Obtain Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertBeginTime(string $CertBeginTime) Set Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertEndTime() Obtain Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertEndTime(string $CertEndTime) Set Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getValidityPeriod() Obtain Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setValidityPeriod(string $ValidityPeriod) Set Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInsertTime() Obtain Certificate application time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInsertTime(string $InsertTime) Set Certificate application time.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrderId() Obtain CA order id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrderId(string $OrderId) Set CA order id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CertificateExtra getCertificateExtra() Obtain Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) Set Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificatePrivateKey() Obtain Private key certificate; for Chinese SM certificates, it refers to the private key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) Set Private key certificate; for Chinese SM certificates, it refers to the private key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificatePublicKey() Obtain Public key certificate; for Chinese SM certificate, it refers to the public key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificatePublicKey(string $CertificatePublicKey) Set Public key certificate; for Chinese SM certificate, it refers to the public key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DvAuthDetail getDvAuthDetail() Obtain Certificate domain name verification information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthDetail(DvAuthDetail $DvAuthDetail) Set Certificate domain name verification information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVulnerabilityReport() Obtain Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVulnerabilityReport(string $VulnerabilityReport) Set Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateId() Obtain Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTypeName() Obtain Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTypeName(string $TypeName) Set Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusName() Obtain Status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusName(string $StatusName) Set Status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSubjectAltName() Obtain Multiple domain names included in the certificate (excluding the primary domain name, which uses the `Domain` field)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectAltName(array $SubjectAltName) Set Multiple domain names included in the certificate (excluding the primary domain name, which uses the `Domain` field)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVip() Obtain Whether the certificate is a paid one.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsVip(boolean $IsVip) Set Whether the certificate is a paid one.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsWildcard() Obtain Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsWildcard(boolean $IsWildcard) Set Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDv() Obtain Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsDv(boolean $IsDv) Set Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVulnerability() Obtain Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsVulnerability(boolean $IsVulnerability) Set Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SubmittedData getSubmittedData() Obtain Profile information submitted for paid certificates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubmittedData(SubmittedData $SubmittedData) Set Profile information submitted for paid certificates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getRenewAble() Obtain Whether the certificate can be renewed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewAble(boolean $RenewAble) Set Whether the certificate can be renewed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeployable() Obtain Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeployable(boolean $Deployable) Set Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain List of associated tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set List of associated tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method RootCertificates getRootCert() Obtain Root certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRootCert(RootCertificates $RootCert) Set Root certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptCert() Obtain Chinese SM certificate public key, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptCert(string $EncryptCert) Set Chinese SM certificate public key, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptPrivateKey() Obtain Chinese SM certificate private key certificate, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptPrivateKey(string $EncryptPrivateKey) Set Chinese SM certificate private key certificate, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertFingerprint() Obtain SHA1 fingerprint of the signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertFingerprint(string $CertFingerprint) Set SHA1 fingerprint of the signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptCertFingerprint() Obtain SHA1 fingerprint of the encryption certificate (for Chinese SM certificates only)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptCertFingerprint(string $EncryptCertFingerprint) Set SHA1 fingerprint of the encryption certificate (for Chinese SM certificates only)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEncryptAlgorithm() Obtain Certificate encryption algorithm (or Chinese SM certificates only).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) Set Certificate encryption algorithm (or Chinese SM certificates only).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDvRevokeAuthDetail() Obtain The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDvRevokeAuthDetail(array $DvRevokeAuthDetail) Set The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCertChainInfo() Obtain Certificate chain information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertChainInfo(array $CertChainInfo) Set Certificate chain information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCertificateDetailResponse extends AbstractModel
{
    /**
     * @var string Certificate belonging to user main account uin.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Certificate source:.
trustAsia.
upload.
wosign.
sheca.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $From;

    /**
     * @var string Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateType;

    /**
     * @var string Certificate package type:.
null: user uploads a certificate (no package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise version (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise pro (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov). 
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
24: globalsign enhanced multiple domain names (ev) ssl certificate.
25: wotrus domain cert.
26: wotrus multi-domain cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi-domain cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi-domain name certificate.
33: wotrus-national cryptography domain name certificate.
34: wotrus-national cryptography domain name certificate (multiple domain names).
35: wotrus-national cryptography wildcard certificate.
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus-national cryptography enhanced certificate.
41: wotrus - national cryptography enhanced certificate (multiple domain names).
42: trustasia - domain name certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: dnspod-enhanced (ev) ssl certificate.
47: dnspod-enhanced (ev) multiple domain names ssl certificate.
48: dnspod-domain name-based (dv) ssl certificate.
49: dnspod-domain name-based (dv) wildcard ssl certificate.
50: dnspod-domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional version multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional version multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise (ov) wildcard.
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise ov pro for multiple domain names.
93: securesite enterprise for multiple domain names (ov).
94: securesite ev pro for multiple domain names.
95: securesite ev for multiple domain names.
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PackageType;

    /**
     * @var string Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProductZhName;

    /**
     * @var string Certificate binds to a common name domain.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Alias
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var integer Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = automatically added dns records, 5 = enterprise certificate, pending document submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Status information. valid values:.
//Common status information.
PRE-REVIEWING: in prereview.
LEGAL-REVIEWING: in legal review.
CA-REVIEWING: in ca review.
PENDING-DCV: in domain verification.
WAIT-ISSUE: waiting for issue (domain verification passed).
Certificate review failure status information.
1. order review failed.
2. ca review failed, and the domain name did not pass the security review.
3. domain name verification timed out, and the order was automatically closed. please reapply for the certificate.
4. the certificate information did not pass the review of the certificate ca agency. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusMsg;

    /**
     * @var string Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyType;

    /**
     * @var string Vulnerability scanning status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VulnerabilityStatus;

    /**
     * @var string Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertBeginTime;

    /**
     * @var string Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertEndTime;

    /**
     * @var string Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ValidityPeriod;

    /**
     * @var string Certificate application time.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InsertTime;

    /**
     * @var string CA order id.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrderId;

    /**
     * @var CertificateExtra Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateExtra;

    /**
     * @var string Private key certificate; for Chinese SM certificates, it refers to the private key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificatePrivateKey;

    /**
     * @var string Public key certificate; for Chinese SM certificate, it refers to the public key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificatePublicKey;

    /**
     * @var DvAuthDetail Certificate domain name verification information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DvAuthDetail;

    /**
     * @var string Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VulnerabilityReport;

    /**
     * @var string Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateId;

    /**
     * @var string Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TypeName;

    /**
     * @var string Status description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusName;

    /**
     * @var array Multiple domain names included in the certificate (excluding the primary domain name, which uses the `Domain` field)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectAltName;

    /**
     * @var boolean Whether the certificate is a paid one.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsVip;

    /**
     * @var boolean Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsWildcard;

    /**
     * @var boolean Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsDv;

    /**
     * @var boolean Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $IsVulnerability;

    /**
     * @var SubmittedData Profile information submitted for paid certificates.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubmittedData;

    /**
     * @var boolean Whether the certificate can be renewed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewAble;

    /**
     * @var boolean Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Deployable;

    /**
     * @var array List of associated tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var RootCertificates Root certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RootCert;

    /**
     * @var string Chinese SM certificate public key, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptCert;

    /**
     * @var string Chinese SM certificate private key certificate, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptPrivateKey;

    /**
     * @var string SHA1 fingerprint of the signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertFingerprint;

    /**
     * @var string SHA1 fingerprint of the encryption certificate (for Chinese SM certificates only)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptCertFingerprint;

    /**
     * @var string Certificate encryption algorithm (or Chinese SM certificates only).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EncryptAlgorithm;

    /**
     * @var array The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DvRevokeAuthDetail;

    /**
     * @var array Certificate chain information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertChainInfo;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $OwnerUin Certificate belonging to user main account uin.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $From Certificate source:.
trustAsia.
upload.
wosign.
sheca.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateType Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PackageType Certificate package type:.
null: user uploads a certificate (no package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise version (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise pro (ov pro).
6: securesite enterprise (ov). 
7: securesite enterprise (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise (ov). 
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
24: globalsign enhanced multiple domain names (ev) ssl certificate.
25: wotrus domain cert.
26: wotrus multi-domain cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi-domain cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi-domain name certificate.
33: wotrus-national cryptography domain name certificate.
34: wotrus-national cryptography domain name certificate (multiple domain names).
35: wotrus-national cryptography wildcard certificate.
37: wotrus-national cryptography enterprise certificate.
38: wotrus-national cryptography enterprise certificate (multiple domain names).
39: wotrus-national cryptography enterprise certificate (wildcard).
40: wotrus-national cryptography enhanced certificate.
41: wotrus - national cryptography enhanced certificate (multiple domain names).
42: trustasia - domain name certificate (wildcard multiple domain names).
43: DNSPod - enterprise (ov) ssl certificate.
44: DNSPod - enterprise (ov) wildcard ssl certificate.
45: DNSPod - enterprise (ov) multiple domain names ssl certificate.
46: dnspod-enhanced (ev) ssl certificate.
47: dnspod-enhanced (ev) multiple domain names ssl certificate.
48: dnspod-domain name-based (dv) ssl certificate.
49: dnspod-domain name-based (dv) wildcard ssl certificate.
50: dnspod-domain name-based (dv) multiple domain names ssl certificate.
51: DNSPod (national cryptography) - enterprise (ov) ssl certificate.
52: DNSPod (national cryptography) - enterprise (ov) wildcard ssl certificate.
53: DNSPod (national cryptography) - enterprise (ov) multiple domain names ssl certificate.
54: DNSPod (national cryptography) - domain name-based (dv) ssl certificate.
55: DNSPod (national cryptography) - domain name-based (dv) wildcard ssl certificate.
56: DNSPod (national cryptography) - domain name-based (dv) multiple domain names ssl certificate.
57: securesite enterprise professional version multiple domain names (ov pro).
58: securesite enterprise multiple domain names (ov).
59: securesite enhanced professional version multiple domain names (ev pro).
60: securesite enhanced multiple domain names (ev).
61: geotrust enhanced multiple domain names (ev).
75: securesite enterprise (ov).
76: securesite enterprise (ov) wildcard.
77: securesite enhanced (ev).
78: geotrust enterprise (ov).
79: geotrust enterprise (ov) wildcard.
80: geotrust enhanced (ev).
81: globalsign enterprise (ov) ssl certificate.
82: globalsign enterprise wildcard (ov) ssl certificate.
83: trustasia c1 dv free.
85: globalsign enhanced (ev) ssl certificate.
88: globalsign enterprise wildcard multiple domain names (ov) ssl certificate.
89: globalsign enterprise multiple domain names (ov) ssl certificate.
90: globalsign enhanced multiple domain names (ev) ssl certificate.
91: geotrust enhanced multiple domain names (ev).
92: securesite enterprise ov pro for multiple domain names.
93: securesite enterprise for multiple domain names (ov).
94: securesite ev pro for multiple domain names.
95: securesite ev for multiple domain names.
96: securesite ev pro.
97: securesite enterprise professional edition (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProductZhName Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Certificate binds to a common name domain.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Alias Alias
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = automatically added dns records, 5 = enterprise certificate, pending document submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusMsg Status information. valid values:.
//Common status information.
PRE-REVIEWING: in prereview.
LEGAL-REVIEWING: in legal review.
CA-REVIEWING: in ca review.
PENDING-DCV: in domain verification.
WAIT-ISSUE: waiting for issue (domain verification passed).
Certificate review failure status information.
1. order review failed.
2. ca review failed, and the domain name did not pass the security review.
3. domain name verification timed out, and the order was automatically closed. please reapply for the certificate.
4. the certificate information did not pass the review of the certificate ca agency. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyType Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation; `EMAIL`: email validation
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VulnerabilityStatus Vulnerability scanning status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertBeginTime Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertEndTime Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ValidityPeriod Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InsertTime Certificate application time.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrderId CA order id.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CertificateExtra $CertificateExtra Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificatePrivateKey Private key certificate; for Chinese SM certificates, it refers to the private key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificatePublicKey Public key certificate; for Chinese SM certificate, it refers to the public key certificate in the signature certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DvAuthDetail $DvAuthDetail Certificate domain name verification information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VulnerabilityReport Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateId Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TypeName Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusName Status description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SubjectAltName Multiple domain names included in the certificate (excluding the primary domain name, which uses the `Domain` field)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVip Whether the certificate is a paid one.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsWildcard Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDv Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVulnerability Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SubmittedData $SubmittedData Profile information submitted for paid certificates.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $RenewAble Whether the certificate can be renewed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Deployable Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags List of associated tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param RootCertificates $RootCert Root certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptCert Chinese SM certificate public key, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptPrivateKey Chinese SM certificate private key certificate, only has value for national cryptography certificates.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertFingerprint SHA1 fingerprint of the signature certificate
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptCertFingerprint SHA1 fingerprint of the encryption certificate (for Chinese SM certificates only)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EncryptAlgorithm Certificate encryption algorithm (or Chinese SM certificates only).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DvRevokeAuthDetail The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CertChainInfo Certificate chain information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
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

        if (array_key_exists("StatusMsg",$param) and $param["StatusMsg"] !== null) {
            $this->StatusMsg = $param["StatusMsg"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("VulnerabilityStatus",$param) and $param["VulnerabilityStatus"] !== null) {
            $this->VulnerabilityStatus = $param["VulnerabilityStatus"];
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

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("CertificateExtra",$param) and $param["CertificateExtra"] !== null) {
            $this->CertificateExtra = new CertificateExtra();
            $this->CertificateExtra->deserialize($param["CertificateExtra"]);
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("DvAuthDetail",$param) and $param["DvAuthDetail"] !== null) {
            $this->DvAuthDetail = new DvAuthDetail();
            $this->DvAuthDetail->deserialize($param["DvAuthDetail"]);
        }

        if (array_key_exists("VulnerabilityReport",$param) and $param["VulnerabilityReport"] !== null) {
            $this->VulnerabilityReport = $param["VulnerabilityReport"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }

        if (array_key_exists("StatusName",$param) and $param["StatusName"] !== null) {
            $this->StatusName = $param["StatusName"];
        }

        if (array_key_exists("SubjectAltName",$param) and $param["SubjectAltName"] !== null) {
            $this->SubjectAltName = $param["SubjectAltName"];
        }

        if (array_key_exists("IsVip",$param) and $param["IsVip"] !== null) {
            $this->IsVip = $param["IsVip"];
        }

        if (array_key_exists("IsWildcard",$param) and $param["IsWildcard"] !== null) {
            $this->IsWildcard = $param["IsWildcard"];
        }

        if (array_key_exists("IsDv",$param) and $param["IsDv"] !== null) {
            $this->IsDv = $param["IsDv"];
        }

        if (array_key_exists("IsVulnerability",$param) and $param["IsVulnerability"] !== null) {
            $this->IsVulnerability = $param["IsVulnerability"];
        }

        if (array_key_exists("SubmittedData",$param) and $param["SubmittedData"] !== null) {
            $this->SubmittedData = new SubmittedData();
            $this->SubmittedData->deserialize($param["SubmittedData"]);
        }

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
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

        if (array_key_exists("RootCert",$param) and $param["RootCert"] !== null) {
            $this->RootCert = new RootCertificates();
            $this->RootCert->deserialize($param["RootCert"]);
        }

        if (array_key_exists("EncryptCert",$param) and $param["EncryptCert"] !== null) {
            $this->EncryptCert = $param["EncryptCert"];
        }

        if (array_key_exists("EncryptPrivateKey",$param) and $param["EncryptPrivateKey"] !== null) {
            $this->EncryptPrivateKey = $param["EncryptPrivateKey"];
        }

        if (array_key_exists("CertFingerprint",$param) and $param["CertFingerprint"] !== null) {
            $this->CertFingerprint = $param["CertFingerprint"];
        }

        if (array_key_exists("EncryptCertFingerprint",$param) and $param["EncryptCertFingerprint"] !== null) {
            $this->EncryptCertFingerprint = $param["EncryptCertFingerprint"];
        }

        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("DvRevokeAuthDetail",$param) and $param["DvRevokeAuthDetail"] !== null) {
            $this->DvRevokeAuthDetail = [];
            foreach ($param["DvRevokeAuthDetail"] as $key => $value){
                $obj = new DvAuths();
                $obj->deserialize($value);
                array_push($this->DvRevokeAuthDetail, $obj);
            }
        }

        if (array_key_exists("CertChainInfo",$param) and $param["CertChainInfo"] !== null) {
            $this->CertChainInfo = [];
            foreach ($param["CertChainInfo"] as $key => $value){
                $obj = new CertBasicInfo();
                $obj->deserialize($value);
                array_push($this->CertChainInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
