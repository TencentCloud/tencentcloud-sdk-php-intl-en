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
 * DescribeCertificate response structure.
 *
 * @method string getOwnerUin() Obtain User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set User UIN
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFrom() Obtain Certificate source:
trustAsia.
upload.
wosign.
sheca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFrom(string $From) Set Certificate source:
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
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise edition (ov). 
7: securesite enterprise edition (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise edition (ov). 
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
26: wotrus multi - domain name cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - name certificate.
34: wotrus - national cryptography domain - name certificate (multiple domain names).
35: wotrus-national cryptography wildcard domain certificate.
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
97: securesite enterprise professional version (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPackageType(string $PackageType) Set Certificate package type:.
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise edition (ov). 
7: securesite enterprise edition (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise edition (ov). 
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
26: wotrus multi - domain name cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - name certificate.
34: wotrus - national cryptography domain - name certificate (multiple domain names).
35: wotrus-national cryptography wildcard domain certificate.
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
97: securesite enterprise professional version (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getProductZhName() Obtain Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setProductZhName(string $ProductZhName) Set Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain Domain name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDomain(string $Domain) Set Domain name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAlias() Obtain Alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns records added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns records added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusMsg() Obtain Status information. valid values:.
//Common status information.
1. pre-reviewing: prereviewing.
2. legal-reviewing: under legal review.
3. ca-reviewing: under ca review.
4. pending-dcv: under domain verification.
5. wait-issue: waiting for issuance (domain verification passed).
//Certificate review failure status information.
Order review failed.
CA review failed; the domain name did not pass the security review.
Domain verification timed out, and the order was automatically closed. please reapply for the certificate.
The certificate information did not pass the review by the certificate authority. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusMsg(string $StatusMsg) Set Status information. valid values:.
//Common status information.
1. pre-reviewing: prereviewing.
2. legal-reviewing: under legal review.
3. ca-reviewing: under ca review.
4. pending-dcv: under domain verification.
5. wait-issue: waiting for issuance (domain verification passed).
//Certificate review failure status information.
Order review failed.
CA review failed; the domain name did not pass the security review.
Domain verification timed out, and the order was automatically closed. please reapply for the certificate.
The certificate information did not pass the review by the certificate authority. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyType() Obtain Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy validation.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyType(string $VerifyType) Set Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy validation.
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
 * @method string getInsertTime() Obtain Application time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setInsertTime(string $InsertTime) Set Application time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOrderId() Obtain Order ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrderId(string $OrderId) Set Order ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method CertificateExtra getCertificateExtra() Obtain Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateExtra(CertificateExtra $CertificateExtra) Set Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
 * @method DvAuthDetail getDvAuthDetail() Obtain DV authentication information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDvAuthDetail(DvAuthDetail $DvAuthDetail) Set DV authentication information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVulnerabilityReport() Obtain Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVulnerabilityReport(string $VulnerabilityReport) Set Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateId() Obtain Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getPackageTypeName() Obtain Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPackageTypeName(string $PackageTypeName) Set Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getStatusName() Obtain Status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusName(string $StatusName) Set Status description
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getSubjectAltName() Obtain Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectAltName(array $SubjectAltName) Set Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsVip() Obtain Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setIsVip(boolean $IsVip) Set Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
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
 * @method boolean getRenewAble() Obtain Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRenewAble(boolean $RenewAble) Set Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
 * @method SubmittedData getSubmittedData() Obtain Submitted data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubmittedData(SubmittedData $SubmittedData) Set Submitted data
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getDeployable() Obtain Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDeployable(boolean $Deployable) Set Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getCAEncryptAlgorithms() Obtain All encryption methods of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCAEncryptAlgorithms(array $CAEncryptAlgorithms) Set All encryption methods of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getCACommonNames() Obtain All common names of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCACommonNames(array $CACommonNames) Set All common names of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getCAEndTimes() Obtain All expiration times of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCAEndTimes(array $CAEndTimes) Set All expiration times of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getDvRevokeAuthDetail() Obtain The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDvRevokeAuthDetail(array $DvRevokeAuthDetail) Set The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeCertificateResponse extends AbstractModel
{
    /**
     * @var string User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Certificate source:
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
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise edition (ov). 
7: securesite enterprise edition (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise edition (ov). 
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
26: wotrus multi - domain name cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - name certificate.
34: wotrus - national cryptography domain - name certificate (multiple domain names).
35: wotrus-national cryptography wildcard domain certificate.
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
97: securesite enterprise professional version (ov pro).
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
     * @var string Domain name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Domain;

    /**
     * @var string Alias
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var integer Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns records added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Status information. valid values:.
//Common status information.
1. pre-reviewing: prereviewing.
2. legal-reviewing: under legal review.
3. ca-reviewing: under ca review.
4. pending-dcv: under domain verification.
5. wait-issue: waiting for issuance (domain verification passed).
//Certificate review failure status information.
Order review failed.
CA review failed; the domain name did not pass the security review.
Domain verification timed out, and the order was automatically closed. please reapply for the certificate.
The certificate information did not pass the review by the certificate authority. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusMsg;

    /**
     * @var string Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy validation.
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
     * @var string Application time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $InsertTime;

    /**
     * @var string Order ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OrderId;

    /**
     * @var CertificateExtra Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateExtra;

    /**
     * @var DvAuthDetail DV authentication information
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
    public $PackageTypeName;

    /**
     * @var string Status description
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusName;

    /**
     * @var array Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectAltName;

    /**
     * @var boolean Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
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
     * @var boolean Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RenewAble;

    /**
     * @var SubmittedData Submitted data
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubmittedData;

    /**
     * @var boolean Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Deployable;

    /**
     * @var array List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array All encryption methods of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CAEncryptAlgorithms;

    /**
     * @var array All common names of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CACommonNames;

    /**
     * @var array All expiration times of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CAEndTimes;

    /**
     * @var array The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DvRevokeAuthDetail;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $OwnerUin User UIN
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectId Project ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $From Certificate source:
trustAsia.
upload.
wosign.
sheca.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateType Certificate type. `CA`: client certificate; `SVR`: server certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PackageType Certificate package type:.
Null: user uploads a certificate (without package type),.
2: trustasia tls rsa ca,. 
3: securesite enhanced enterprise edition (ev pro),. 
4: securesite enhanced (ev),. 
5: securesite enterprise professional edition (ov pro).
6: securesite enterprise edition (ov). 
7: securesite enterprise edition (ov) wildcard. 
8: geotrust enhanced (ev). 
9: geotrust enterprise edition (ov). 
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
26: wotrus multi - domain name cert.
27: wotrus wildcard cert.
28: wotrus enterprise cert.
29: wotrus enterprise multi - domain name cert.
30: wotrus enterprise wildcard certificate.
31: wotrus enhanced certificate.
32: wotrus enhanced multi - domain name certificate.
33: wotrus - national cryptography domain - name certificate.
34: wotrus - national cryptography domain - name certificate (multiple domain names).
35: wotrus-national cryptography wildcard domain certificate.
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
97: securesite enterprise professional version (ov pro).
98: cfca enterprise (ov) ssl certificate.
99: cfca enterprise multiple domain names (ov) ssl certificate.
100: cfca enterprise wildcard (ov) ssl certificate.
101: cfca enhanced (ev) ssl certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ProductZhName Certificate product name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Domain Domain name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Alias Alias
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Certificate status: 0 = under review, 1 = approved, 2 = review failed, 3 = expired, 4 = dns records added automatically, 5 = enterprise certificate, pending documentation submission, 6 = order cancellation in progress, 7 = canceled, 8 = documents submitted, pending upload of confirmation letter, 9 = certificate revocation in progress, 10 = revoked, 11 = reissue in progress, 12 = pending upload of revocation confirmation letter, 13 = free certificate pending document submission, 14 = certificate has been refunded, 15 = certificate migration in progress.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusMsg Status information. valid values:.
//Common status information.
1. pre-reviewing: prereviewing.
2. legal-reviewing: under legal review.
3. ca-reviewing: under ca review.
4. pending-dcv: under domain verification.
5. wait-issue: waiting for issuance (domain verification passed).
//Certificate review failure status information.
Order review failed.
CA review failed; the domain name did not pass the security review.
Domain verification timed out, and the order was automatically closed. please reapply for the certificate.
The certificate information did not pass the review by the certificate authority. the reviewer will call the contact information reserved for the certificate. please pay attention to the incoming call. subsequently, you can resubmit the information through "modify information".
To be continuously improved.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyType Validation type: DNS_AUTO = automatic dns validation, DNS = manual dns validation, FILE = file verification, DNS_PROXY = dns proxy validation, FILE_PROXY = file proxy validation.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VulnerabilityStatus Vulnerability scanning status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertBeginTime Time when the certificate takes effect
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertEndTime Time when the certificate expires
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ValidityPeriod Validity period of the certificate, in months
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InsertTime Application time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OrderId Order ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param CertificateExtra $CertificateExtra Extended information of the certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param DvAuthDetail $DvAuthDetail DV authentication information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VulnerabilityReport Vulnerability scanning assessment report
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateId Certificate ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $PackageTypeName Certificate type name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $StatusName Status description
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $SubjectAltName Domain names associated with the certificate (including the primary domain name)
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVip Whether the customer is a VIP customer
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsWildcard Whether the certificate is a wildcard certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDv Whether the certificate is a DV certificate
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsVulnerability Whether the vulnerability scanning feature is enabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $RenewAble Whether the certificate can be reissued
Note: this field may return null, indicating that no valid values can be obtained.
     * @param SubmittedData $SubmittedData Submitted data
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Deployable Whether the certificate can be deployed
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags List of tags
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $CAEncryptAlgorithms All encryption methods of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $CACommonNames All common names of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $CAEndTimes All expiration times of the ca certificate. only valid when the certificate type CertificateType is ca.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $DvRevokeAuthDetail The authentication value for DV certificate revocation.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("PackageTypeName",$param) and $param["PackageTypeName"] !== null) {
            $this->PackageTypeName = $param["PackageTypeName"];
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

        if (array_key_exists("RenewAble",$param) and $param["RenewAble"] !== null) {
            $this->RenewAble = $param["RenewAble"];
        }

        if (array_key_exists("SubmittedData",$param) and $param["SubmittedData"] !== null) {
            $this->SubmittedData = new SubmittedData();
            $this->SubmittedData->deserialize($param["SubmittedData"]);
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

        if (array_key_exists("CAEncryptAlgorithms",$param) and $param["CAEncryptAlgorithms"] !== null) {
            $this->CAEncryptAlgorithms = $param["CAEncryptAlgorithms"];
        }

        if (array_key_exists("CACommonNames",$param) and $param["CACommonNames"] !== null) {
            $this->CACommonNames = $param["CACommonNames"];
        }

        if (array_key_exists("CAEndTimes",$param) and $param["CAEndTimes"] !== null) {
            $this->CAEndTimes = $param["CAEndTimes"];
        }

        if (array_key_exists("DvRevokeAuthDetail",$param) and $param["DvRevokeAuthDetail"] !== null) {
            $this->DvRevokeAuthDetail = [];
            foreach ($param["DvRevokeAuthDetail"] as $key => $value){
                $obj = new DvAuths();
                $obj->deserialize($value);
                array_push($this->DvRevokeAuthDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
