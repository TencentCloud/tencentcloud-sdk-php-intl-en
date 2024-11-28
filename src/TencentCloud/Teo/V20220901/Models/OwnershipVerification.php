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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of domain name ownership verification.
 *
 * @method DnsVerification getDnsVerification() Obtain CNAME, when there is no domain name access, the information required for DNS resolution verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setDnsVerification(DnsVerification $DnsVerification) Set CNAME, when there is no domain name access, the information required for DNS resolution verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method FileVerification getFileVerification() Obtain CNAME, when there is no domain name access, the information required for file verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method void setFileVerification(FileVerification $FileVerification) Set CNAME, when there is no domain name access, the information required for file verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
 * @method NsVerification getNsVerification() Obtain u200cInformation required for switching DNS servers. It's applicable to sites connected via NSs. For details, see [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1).
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNsVerification(NsVerification $NsVerification) Set u200cInformation required for switching DNS servers. It's applicable to sites connected via NSs. For details, see [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1).
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class OwnershipVerification extends AbstractModel
{
    /**
     * @var DnsVerification CNAME, when there is no domain name access, the information required for DNS resolution verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $DnsVerification;

    /**
     * @var FileVerification CNAME, when there is no domain name access, the information required for file verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
     */
    public $FileVerification;

    /**
     * @var NsVerification u200cInformation required for switching DNS servers. It's applicable to sites connected via NSs. For details, see [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1).
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NsVerification;

    /**
     * @param DnsVerification $DnsVerification CNAME, when there is no domain name access, the information required for DNS resolution verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param FileVerification $FileVerification CNAME, when there is no domain name access, the information required for file verification is used. For details, refer to [Site/Domain Ownership Verification
](https://intl.cloud.tencent.com/document/product/1552/70789?from_cn_redirect=1#7af6ecf8-afca-4e35-8811-b5797ed1bde5).
Note: This field may return null, which indicates a failure to obtain a valid value.
     * @param NsVerification $NsVerification u200cInformation required for switching DNS servers. It's applicable to sites connected via NSs. For details, see [Modifying DNS Server](https://intl.cloud.tencent.com/document/product/1552/90452?from_cn_redirect=1).
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DnsVerification",$param) and $param["DnsVerification"] !== null) {
            $this->DnsVerification = new DnsVerification();
            $this->DnsVerification->deserialize($param["DnsVerification"]);
        }

        if (array_key_exists("FileVerification",$param) and $param["FileVerification"] !== null) {
            $this->FileVerification = new FileVerification();
            $this->FileVerification->deserialize($param["FileVerification"]);
        }

        if (array_key_exists("NsVerification",$param) and $param["NsVerification"] !== null) {
            $this->NsVerification = new NsVerification();
            $this->NsVerification->deserialize($param["NsVerification"]);
        }
    }
}
