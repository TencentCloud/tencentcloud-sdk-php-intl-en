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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Document lifecycle information
 *
 * @method string getCreateTime() Obtain <p>Creation time (Unix seconds).</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time (Unix seconds).</p>
 * @method ExpirationPolicy getExpirationPolicy() Obtain <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method void setExpirationPolicy(ExpirationPolicy $ExpirationPolicy) Set <p>Expiration policy (validity time and behavior after the validity period expires)</p>
 * @method integer getStatus() Obtain <p>Document status: 1=parsing, 2=parsing failure, 3=import failed, 4=under review, 5=review failure, 6=Learning, 7=learning failed, 8=import complete, 9=expired, 10=quota invalid, 11=quota recovering, 12=rename review failure, 13=rename appeal failure, 14=manual appeal in progress, 15=manual appeal failure<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_STATUS_PARSING</td><td>1</td><td>Parsing</td></tr><tr><td>DOC_STATUS_PARSE_FAIL</td><td>2</td><td>Parsing failure</td></tr><tr><td>DOC_STATUS_IMPORT_FAIL</td><td>3</td><td>Import failed</td></tr><tr><td>DOC_STATUS_AUDITING</td><td>4</td><td>Under review</td></tr><tr><td>DOC_STATUS_AUDIT_FAIL</td><td>5</td><td>Review failure</td></tr><tr><td>DOC_STATUS_LEARNING</td><td>6</td><td>Learning</td></tr><tr><td>DOC_STATUS_LEARN_FAIL</td><td>7</td><td>Learning failed</td></tr><tr><td>DOC_STATUS_IMPORTED</td><td>8</td><td>Import complete</td></tr><tr><td>DOC_STATUS_EXPIRED</td><td>9</td><td>Expired</td></tr><tr><td>DOC_STATUS_QUOTA_INVALID</td><td>10</td><td>Quota invalid</td></tr><tr><td>DOC_STATUS_QUOTA_RECOVERING</td><td>11</td><td>Quota recovering</td></tr><tr><td>DOC_STATUS_RENAME_AUDIT_FAIL</td><td>12</td><td>Rename review failure</td></tr><tr><td>DOC_STATUS_RENAME_APPEAL_FAIL</td><td>13</td><td>Rename appeal failure</td></tr><tr><td>DOC_STATUS_MANUAL_APPEALING</td><td>14</td><td>Manual appeal in progress</td></tr><tr><td>DOC_STATUS_MANUAL_APPEAL_FAIL</td><td>15</td><td>Manual appeal failure</td></tr></tbody></table></p>
 * @method void setStatus(integer $Status) Set <p>Document status: 1=parsing, 2=parsing failure, 3=import failed, 4=under review, 5=review failure, 6=Learning, 7=learning failed, 8=import complete, 9=expired, 10=quota invalid, 11=quota recovering, 12=rename review failure, 13=rename appeal failure, 14=manual appeal in progress, 15=manual appeal failure<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_STATUS_PARSING</td><td>1</td><td>Parsing</td></tr><tr><td>DOC_STATUS_PARSE_FAIL</td><td>2</td><td>Parsing failure</td></tr><tr><td>DOC_STATUS_IMPORT_FAIL</td><td>3</td><td>Import failed</td></tr><tr><td>DOC_STATUS_AUDITING</td><td>4</td><td>Under review</td></tr><tr><td>DOC_STATUS_AUDIT_FAIL</td><td>5</td><td>Review failure</td></tr><tr><td>DOC_STATUS_LEARNING</td><td>6</td><td>Learning</td></tr><tr><td>DOC_STATUS_LEARN_FAIL</td><td>7</td><td>Learning failed</td></tr><tr><td>DOC_STATUS_IMPORTED</td><td>8</td><td>Import complete</td></tr><tr><td>DOC_STATUS_EXPIRED</td><td>9</td><td>Expired</td></tr><tr><td>DOC_STATUS_QUOTA_INVALID</td><td>10</td><td>Quota invalid</td></tr><tr><td>DOC_STATUS_QUOTA_RECOVERING</td><td>11</td><td>Quota recovering</td></tr><tr><td>DOC_STATUS_RENAME_AUDIT_FAIL</td><td>12</td><td>Rename review failure</td></tr><tr><td>DOC_STATUS_RENAME_APPEAL_FAIL</td><td>13</td><td>Rename appeal failure</td></tr><tr><td>DOC_STATUS_MANUAL_APPEALING</td><td>14</td><td>Manual appeal in progress</td></tr><tr><td>DOC_STATUS_MANUAL_APPEAL_FAIL</td><td>15</td><td>Manual appeal failure</td></tr></tbody></table></p>
 * @method string getStatusDesc() Obtain <p>Status description</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description</p>
 * @method string getStatusMessage() Obtain <p>Status additional information</p>
 * @method void setStatusMessage(string $StatusMessage) Set <p>Status additional information</p>
 * @method string getUpdateTime() Obtain <p>Update time (Unix seconds)</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time (Unix seconds)</p>
 */
class DocLifecycle extends AbstractModel
{
    /**
     * @var string <p>Creation time (Unix seconds).</p>
     */
    public $CreateTime;

    /**
     * @var ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     */
    public $ExpirationPolicy;

    /**
     * @var integer <p>Document status: 1=parsing, 2=parsing failure, 3=import failed, 4=under review, 5=review failure, 6=Learning, 7=learning failed, 8=import complete, 9=expired, 10=quota invalid, 11=quota recovering, 12=rename review failure, 13=rename appeal failure, 14=manual appeal in progress, 15=manual appeal failure<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_STATUS_PARSING</td><td>1</td><td>Parsing</td></tr><tr><td>DOC_STATUS_PARSE_FAIL</td><td>2</td><td>Parsing failure</td></tr><tr><td>DOC_STATUS_IMPORT_FAIL</td><td>3</td><td>Import failed</td></tr><tr><td>DOC_STATUS_AUDITING</td><td>4</td><td>Under review</td></tr><tr><td>DOC_STATUS_AUDIT_FAIL</td><td>5</td><td>Review failure</td></tr><tr><td>DOC_STATUS_LEARNING</td><td>6</td><td>Learning</td></tr><tr><td>DOC_STATUS_LEARN_FAIL</td><td>7</td><td>Learning failed</td></tr><tr><td>DOC_STATUS_IMPORTED</td><td>8</td><td>Import complete</td></tr><tr><td>DOC_STATUS_EXPIRED</td><td>9</td><td>Expired</td></tr><tr><td>DOC_STATUS_QUOTA_INVALID</td><td>10</td><td>Quota invalid</td></tr><tr><td>DOC_STATUS_QUOTA_RECOVERING</td><td>11</td><td>Quota recovering</td></tr><tr><td>DOC_STATUS_RENAME_AUDIT_FAIL</td><td>12</td><td>Rename review failure</td></tr><tr><td>DOC_STATUS_RENAME_APPEAL_FAIL</td><td>13</td><td>Rename appeal failure</td></tr><tr><td>DOC_STATUS_MANUAL_APPEALING</td><td>14</td><td>Manual appeal in progress</td></tr><tr><td>DOC_STATUS_MANUAL_APPEAL_FAIL</td><td>15</td><td>Manual appeal failure</td></tr></tbody></table></p>
     */
    public $Status;

    /**
     * @var string <p>Status description</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>Status additional information</p>
     */
    public $StatusMessage;

    /**
     * @var string <p>Update time (Unix seconds)</p>
     */
    public $UpdateTime;

    /**
     * @param string $CreateTime <p>Creation time (Unix seconds).</p>
     * @param ExpirationPolicy $ExpirationPolicy <p>Expiration policy (validity time and behavior after the validity period expires)</p>
     * @param integer $Status <p>Document status: 1=parsing, 2=parsing failure, 3=import failed, 4=under review, 5=review failure, 6=Learning, 7=learning failed, 8=import complete, 9=expired, 10=quota invalid, 11=quota recovering, 12=rename review failure, 13=rename appeal failure, 14=manual appeal in progress, 15=manual appeal failure<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>DOC_STATUS_UNKNOWN</td><td>0</td><td></td></tr><tr><td>DOC_STATUS_PARSING</td><td>1</td><td>Parsing</td></tr><tr><td>DOC_STATUS_PARSE_FAIL</td><td>2</td><td>Parsing failure</td></tr><tr><td>DOC_STATUS_IMPORT_FAIL</td><td>3</td><td>Import failed</td></tr><tr><td>DOC_STATUS_AUDITING</td><td>4</td><td>Under review</td></tr><tr><td>DOC_STATUS_AUDIT_FAIL</td><td>5</td><td>Review failure</td></tr><tr><td>DOC_STATUS_LEARNING</td><td>6</td><td>Learning</td></tr><tr><td>DOC_STATUS_LEARN_FAIL</td><td>7</td><td>Learning failed</td></tr><tr><td>DOC_STATUS_IMPORTED</td><td>8</td><td>Import complete</td></tr><tr><td>DOC_STATUS_EXPIRED</td><td>9</td><td>Expired</td></tr><tr><td>DOC_STATUS_QUOTA_INVALID</td><td>10</td><td>Quota invalid</td></tr><tr><td>DOC_STATUS_QUOTA_RECOVERING</td><td>11</td><td>Quota recovering</td></tr><tr><td>DOC_STATUS_RENAME_AUDIT_FAIL</td><td>12</td><td>Rename review failure</td></tr><tr><td>DOC_STATUS_RENAME_APPEAL_FAIL</td><td>13</td><td>Rename appeal failure</td></tr><tr><td>DOC_STATUS_MANUAL_APPEALING</td><td>14</td><td>Manual appeal in progress</td></tr><tr><td>DOC_STATUS_MANUAL_APPEAL_FAIL</td><td>15</td><td>Manual appeal failure</td></tr></tbody></table></p>
     * @param string $StatusDesc <p>Status description</p>
     * @param string $StatusMessage <p>Status additional information</p>
     * @param string $UpdateTime <p>Update time (Unix seconds)</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpirationPolicy",$param) and $param["ExpirationPolicy"] !== null) {
            $this->ExpirationPolicy = new ExpirationPolicy();
            $this->ExpirationPolicy->deserialize($param["ExpirationPolicy"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
