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
 * Certificate operation logs
 *
 * @method string getAction() Obtain Action performed on logs
 * @method void setAction(string $Action) Set Action performed on logs
 * @method string getCreatedOn() Obtain Time when the action is performed
 * @method void setCreatedOn(string $CreatedOn) Set Time when the action is performed
 * @method string getUin() Obtain Root account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set Root account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSubAccountUin() Obtain Sub-Account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub-Account.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCertId() Obtain Certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertId(string $CertId) Set Certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Each operation type corresponds to a specific operation description. the following is a textual explanation of each operation type and its description:.
1. apply: indicates applying for a free cert.
2. delete: indicates a deletion.
3. download - represents the download operation.
4. upload: indicates an upload operation.
5. revoke: indicates revoking a cert.
6. cancelRevoke - indicates canceling the revocation operation.
7. updateAlias - indicates updating the remark information.
8. changeProject - indicates assigning the certificate to a certain project.
9. uploadConfirmLetter - indicates uploading the confirmation letter.
10. cancel - indicates canceling the order operation.
11. replace - specifies reissuing a certificate.
12. downloadConfirmLetter - specifies downloading a certificate revocation confirmation letter.
13. editRevokeLetter - specifies uploading a certificate revocation confirmation letter.
14. renewVIP - specifies renewing a paid certificate.
15. applyVIP - specifies applying for a paid certificate.
16. submitInfo - specifies submitting documentation.
17. downloadConfirmLetter - specifies downloading the confirmation letter template.
18. uploadFromYunAPI - indicates uploading via the cloud api.
19. transferIn - indicates the certificate transfer to operation.
20. transferOut - indicates the certificate transfer operation.
21. refund - indicates applying for a refund.
22. multiYearsRenew - indicates multi-year auto-renewal.
23. modifyDownloadLimit - indicates modifying the download limit switch.
24. issued - indicates certificate issuance.
25. domainValidationPassed - indicates domain verification completed.
26. Resubmit - indicates reapplying for a certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Each operation type corresponds to a specific operation description. the following is a textual explanation of each operation type and its description:.
1. apply: indicates applying for a free cert.
2. delete: indicates a deletion.
3. download - represents the download operation.
4. upload: indicates an upload operation.
5. revoke: indicates revoking a cert.
6. cancelRevoke - indicates canceling the revocation operation.
7. updateAlias - indicates updating the remark information.
8. changeProject - indicates assigning the certificate to a certain project.
9. uploadConfirmLetter - indicates uploading the confirmation letter.
10. cancel - indicates canceling the order operation.
11. replace - specifies reissuing a certificate.
12. downloadConfirmLetter - specifies downloading a certificate revocation confirmation letter.
13. editRevokeLetter - specifies uploading a certificate revocation confirmation letter.
14. renewVIP - specifies renewing a paid certificate.
15. applyVIP - specifies applying for a paid certificate.
16. submitInfo - specifies submitting documentation.
17. downloadConfirmLetter - specifies downloading the confirmation letter template.
18. uploadFromYunAPI - indicates uploading via the cloud api.
19. transferIn - indicates the certificate transfer to operation.
20. transferOut - indicates the certificate transfer operation.
21. refund - indicates applying for a refund.
22. multiYearsRenew - indicates multi-year auto-renewal.
23. modifyDownloadLimit - indicates modifying the download limit switch.
24. issued - indicates certificate issuance.
25. domainValidationPassed - indicates domain verification completed.
26. Resubmit - indicates reapplying for a certificate.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class OperationLog extends AbstractModel
{
    /**
     * @var string Action performed on logs
     */
    public $Action;

    /**
     * @var string Time when the action is performed
     */
    public $CreatedOn;

    /**
     * @var string Root account.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @var string Sub-Account.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubAccountUin;

    /**
     * @var string Certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertId;

    /**
     * @var string Each operation type corresponds to a specific operation description. the following is a textual explanation of each operation type and its description:.
1. apply: indicates applying for a free cert.
2. delete: indicates a deletion.
3. download - represents the download operation.
4. upload: indicates an upload operation.
5. revoke: indicates revoking a cert.
6. cancelRevoke - indicates canceling the revocation operation.
7. updateAlias - indicates updating the remark information.
8. changeProject - indicates assigning the certificate to a certain project.
9. uploadConfirmLetter - indicates uploading the confirmation letter.
10. cancel - indicates canceling the order operation.
11. replace - specifies reissuing a certificate.
12. downloadConfirmLetter - specifies downloading a certificate revocation confirmation letter.
13. editRevokeLetter - specifies uploading a certificate revocation confirmation letter.
14. renewVIP - specifies renewing a paid certificate.
15. applyVIP - specifies applying for a paid certificate.
16. submitInfo - specifies submitting documentation.
17. downloadConfirmLetter - specifies downloading the confirmation letter template.
18. uploadFromYunAPI - indicates uploading via the cloud api.
19. transferIn - indicates the certificate transfer to operation.
20. transferOut - indicates the certificate transfer operation.
21. refund - indicates applying for a refund.
22. multiYearsRenew - indicates multi-year auto-renewal.
23. modifyDownloadLimit - indicates modifying the download limit switch.
24. issued - indicates certificate issuance.
25. domainValidationPassed - indicates domain verification completed.
26. Resubmit - indicates reapplying for a certificate.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @param string $Action Action performed on logs
     * @param string $CreatedOn Time when the action is performed
     * @param string $Uin Root account.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SubAccountUin Sub-Account.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CertId Certificate id.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Type Each operation type corresponds to a specific operation description. the following is a textual explanation of each operation type and its description:.
1. apply: indicates applying for a free cert.
2. delete: indicates a deletion.
3. download - represents the download operation.
4. upload: indicates an upload operation.
5. revoke: indicates revoking a cert.
6. cancelRevoke - indicates canceling the revocation operation.
7. updateAlias - indicates updating the remark information.
8. changeProject - indicates assigning the certificate to a certain project.
9. uploadConfirmLetter - indicates uploading the confirmation letter.
10. cancel - indicates canceling the order operation.
11. replace - specifies reissuing a certificate.
12. downloadConfirmLetter - specifies downloading a certificate revocation confirmation letter.
13. editRevokeLetter - specifies uploading a certificate revocation confirmation letter.
14. renewVIP - specifies renewing a paid certificate.
15. applyVIP - specifies applying for a paid certificate.
16. submitInfo - specifies submitting documentation.
17. downloadConfirmLetter - specifies downloading the confirmation letter template.
18. uploadFromYunAPI - indicates uploading via the cloud api.
19. transferIn - indicates the certificate transfer to operation.
20. transferOut - indicates the certificate transfer operation.
21. refund - indicates applying for a refund.
22. multiYearsRenew - indicates multi-year auto-renewal.
23. modifyDownloadLimit - indicates modifying the download limit switch.
24. issued - indicates certificate issuance.
25. domainValidationPassed - indicates domain verification completed.
26. Resubmit - indicates reapplying for a certificate.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
