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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchModifyIntlDomainInfo request structure.
 *
 * @method array getDomains() Obtain The domains whose information is to be modified.
 * @method void setDomains(array $Domains) Set The domains whose information is to be modified.
 * @method string getTemplateId() Obtain The profile ID.
 * @method void setTemplateId(string $TemplateId) Set The profile ID.
 * @method boolean getLockTransfer() Obtain Whether to enable the 60-day inter-registrar transfer lock.
 * @method void setLockTransfer(boolean $LockTransfer) Set Whether to enable the 60-day inter-registrar transfer lock.
 */
class BatchModifyIntlDomainInfoRequest extends AbstractModel
{
    /**
     * @var array The domains whose information is to be modified.
     */
    public $Domains;

    /**
     * @var string The profile ID.
     */
    public $TemplateId;

    /**
     * @var boolean Whether to enable the 60-day inter-registrar transfer lock.
     */
    public $LockTransfer;

    /**
     * @param array $Domains The domains whose information is to be modified.
     * @param string $TemplateId The profile ID.
     * @param boolean $LockTransfer Whether to enable the 60-day inter-registrar transfer lock.
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
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("LockTransfer",$param) and $param["LockTransfer"] !== null) {
            $this->LockTransfer = $param["LockTransfer"];
        }
    }
}
