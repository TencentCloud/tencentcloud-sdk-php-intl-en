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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudProductLogCollection request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance ID</p><ul><li>Obtained through official documentation of connected cloud services</li></ul>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID</p><ul><li>Obtained through official documentation of connected cloud services</li></ul>
 * @method string getAssumerName() Obtain <p>Cloud product identifier. Support the following products</p><ul><li>APIS</li><li>BH</li><li>CDB</li><li>CDS</li><li>CFS</li><li>CLB</li><li>CSIP</li><li>CWP</li><li>DCDB</li><li>DNSPod</li><li>EMR</li><li>HTTPDNS</li><li>KHL</li><li>llmsgw</li><li>MariaDB</li><li>MDP</li><li>MongoDB</li><li>PostgreSQL</li><li>TCSS</li><li>TDSQL-C</li><li>TDStore</li><li>TencentDB-Redis</li><li>TEO</li><li>TokenHub</li><li>TSE</li></ul>
 * @method void setAssumerName(string $AssumerName) Set <p>Cloud product identifier. Support the following products</p><ul><li>APIS</li><li>BH</li><li>CDB</li><li>CDS</li><li>CFS</li><li>CLB</li><li>CSIP</li><li>CWP</li><li>DCDB</li><li>DNSPod</li><li>EMR</li><li>HTTPDNS</li><li>KHL</li><li>llmsgw</li><li>MariaDB</li><li>MDP</li><li>MongoDB</li><li>PostgreSQL</li><li>TCSS</li><li>TDSQL-C</li><li>TDStore</li><li>TencentDB-Redis</li><li>TEO</li><li>TokenHub</li><li>TSE</li></ul>
 * @method string getLogType() Obtain <p>Log types supported by each cloud product are as follows:</p><table><thead><tr><th>assumer_name</th><th>Supported log_type</th></tr></thead><tbody><tr><td>APIS</td><td>APIS-ACCESS</td></tr><tr><td>BH</td><td>BH-COMMANDLOG, BH-FILELOG</td></tr><tr><td>CDB</td><td>CDB-AUDIT</td></tr><tr><td>CDS</td><td>CDS-AUDIT, CDS-RISK</td></tr><tr><td>CFS</td><td>CFS-AUDIT</td></tr><tr><td>CLB</td><td>CMR-SPEND</td></tr><tr><td>CSIP</td><td>CSIP</td></tr><tr><td>CWP</td><td>CWP</td></tr><tr><td>DCDB</td><td>DCDB-AUDIT, DCDB-ERROR, DCDB-SLOW</td></tr><tr><td>DNSPod</td><td>DNSPod-RESOLVELOG</td></tr><tr><td>EMR</td><td>EMR-OPERATION</td></tr><tr><td>HTTPDNS</td><td>HTTPDNS-RESOLVELOG</td></tr><tr><td>MariaDB</td><td>MariaDB-AUDIT, MariaDB-ERROR, MariaDB-SLOW</td></tr><tr><td>MDP</td><td>MDP-SSAI</td></tr><tr><td>MongoDB</td><td>MongoDB-AUDIT, MongoDB-ErrorLog, MongoDB-OperationLog, MongoDB-SlowLog</td></tr><tr><td>PostgreSQL</td><td>PostgreSQL-AUDIT, PostgreSQL-ERROR, PostgreSQL-SLOW</td></tr><tr><td>TCSS</td><td>TCSS</td></tr><tr><td>TDSQL-C</td><td>TDSQL-C-AUDIT</td></tr><tr><td>TDStore</td><td>TDMYSQL-SLOW</td></tr><tr><td>TencentDB-Redis</td><td>Redis-AUDIT, Redis-ERROR, Redis-SLOW</td></tr><tr><td>TEO</td><td>TEO-INEFERENCE</td></tr><tr><td>llmsgw</td><td>llmsgw-mcp-security-alarm</td></tr></tbody></table>
 * @method void setLogType(string $LogType) Set <p>Log types supported by each cloud product are as follows:</p><table><thead><tr><th>assumer_name</th><th>Supported log_type</th></tr></thead><tbody><tr><td>APIS</td><td>APIS-ACCESS</td></tr><tr><td>BH</td><td>BH-COMMANDLOG, BH-FILELOG</td></tr><tr><td>CDB</td><td>CDB-AUDIT</td></tr><tr><td>CDS</td><td>CDS-AUDIT, CDS-RISK</td></tr><tr><td>CFS</td><td>CFS-AUDIT</td></tr><tr><td>CLB</td><td>CMR-SPEND</td></tr><tr><td>CSIP</td><td>CSIP</td></tr><tr><td>CWP</td><td>CWP</td></tr><tr><td>DCDB</td><td>DCDB-AUDIT, DCDB-ERROR, DCDB-SLOW</td></tr><tr><td>DNSPod</td><td>DNSPod-RESOLVELOG</td></tr><tr><td>EMR</td><td>EMR-OPERATION</td></tr><tr><td>HTTPDNS</td><td>HTTPDNS-RESOLVELOG</td></tr><tr><td>MariaDB</td><td>MariaDB-AUDIT, MariaDB-ERROR, MariaDB-SLOW</td></tr><tr><td>MDP</td><td>MDP-SSAI</td></tr><tr><td>MongoDB</td><td>MongoDB-AUDIT, MongoDB-ErrorLog, MongoDB-OperationLog, MongoDB-SlowLog</td></tr><tr><td>PostgreSQL</td><td>PostgreSQL-AUDIT, PostgreSQL-ERROR, PostgreSQL-SLOW</td></tr><tr><td>TCSS</td><td>TCSS</td></tr><tr><td>TDSQL-C</td><td>TDSQL-C-AUDIT</td></tr><tr><td>TDStore</td><td>TDMYSQL-SLOW</td></tr><tr><td>TencentDB-Redis</td><td>Redis-AUDIT, Redis-ERROR, Redis-SLOW</td></tr><tr><td>TEO</td><td>TEO-INEFERENCE</td></tr><tr><td>llmsgw</td><td>llmsgw-mcp-security-alarm</td></tr></tbody></table>
 * @method string getCloudProductRegion() Obtain <p>Product region. Different LogTypes have different input parameter formats:</p><p><strong>Format A: Short region code</strong> (gz / sh / bj …)</p><ul><li>All APIS log types: for example, <code>gz</code></li><li>CDB-AUDIT</li><li>TDSQL-C-AUDIT</li><li>TDMYSQL-SLOW</li><li>All DCDB log types</li><li>All MariaDB log types</li><li>All PostgreSQL log types</li><li>MongoDB-AUDIT (<strong>Note that this is different from SlowLog/ErrorLog/OperationLog</strong>)</li><li>All TencentDB-Redis log types</li><li>EMR-OPERATION</li></ul><p><strong>Format B: Long region code</strong> (ap-guangzhou / ap-shanghai / ap-singapore …)</p><ul><li>All CDS log types: for example, <code>ap-guangzhou</code></li><li>MongoDB-SlowLog / MongoDB-ErrorLog / MongoDB-OperationLog</li><li>DNSPod-RESOLVELOG</li><li>HTTPDNS-RESOLVELOG</li><li>MDP-SSAI</li><li>CFS-AUDIT</li><li>TEO-INEFERENCE</li><li>TokenHub-ActivityLog / TokenHub-AuditLog</li><li>llmsgw-mcp-security-alarm</li><li>CSIP / TCSS / TSE / CWP / KHL and others</li></ul><p><strong>Format C: Dedicated BH Polaris name</strong></p><ul><li>All BH log types: <code>overseas-polaris</code> (Hong Kong (China) and other overseas) / <code>fsi-polaris</code> (financial district) / <code>general-polaris</code> (general zone) / <code>intl-sg-prod</code> (international website)</li></ul>
 * @method void setCloudProductRegion(string $CloudProductRegion) Set <p>Product region. Different LogTypes have different input parameter formats:</p><p><strong>Format A: Short region code</strong> (gz / sh / bj …)</p><ul><li>All APIS log types: for example, <code>gz</code></li><li>CDB-AUDIT</li><li>TDSQL-C-AUDIT</li><li>TDMYSQL-SLOW</li><li>All DCDB log types</li><li>All MariaDB log types</li><li>All PostgreSQL log types</li><li>MongoDB-AUDIT (<strong>Note that this is different from SlowLog/ErrorLog/OperationLog</strong>)</li><li>All TencentDB-Redis log types</li><li>EMR-OPERATION</li></ul><p><strong>Format B: Long region code</strong> (ap-guangzhou / ap-shanghai / ap-singapore …)</p><ul><li>All CDS log types: for example, <code>ap-guangzhou</code></li><li>MongoDB-SlowLog / MongoDB-ErrorLog / MongoDB-OperationLog</li><li>DNSPod-RESOLVELOG</li><li>HTTPDNS-RESOLVELOG</li><li>MDP-SSAI</li><li>CFS-AUDIT</li><li>TEO-INEFERENCE</li><li>TokenHub-ActivityLog / TokenHub-AuditLog</li><li>llmsgw-mcp-security-alarm</li><li>CSIP / TCSS / TSE / CWP / KHL and others</li></ul><p><strong>Format C: Dedicated BH Polaris name</strong></p><ul><li>All BH log types: <code>overseas-polaris</code> (Hong Kong (China) and other overseas) / <code>fsi-polaris</code> (financial district) / <code>general-polaris</code> (general zone) / <code>intl-sg-prod</code> (international website)</li></ul>
 * @method string getClsRegion() Obtain <p>CLS target region</p><ul><li>Supported regions: see <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document</li></ul>
 * @method void setClsRegion(string $ClsRegion) Set <p>CLS target region</p><ul><li>Supported regions: see <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document</li></ul>
 * @method string getLogsetName() Obtain <p>Logset name. Required when LogsetId is not specified. If the log set does not exist, it will automatically create one.</p>
 * @method void setLogsetName(string $LogsetName) Set <p>Logset name. Required when LogsetId is not specified. If the log set does not exist, it will automatically create one.</p>
 * @method string getTopicName() Obtain <p>Log topic name. This parameter is required when TopicId is empty. If the log topic does not exist, the system will automatically create one.</p>
 * @method void setTopicName(string $TopicName) Set <p>Log topic name. This parameter is required when TopicId is empty. If the log topic does not exist, the system will automatically create one.</p>
 * @method string getExtend() Obtain <p>Log configuration extension info, generally used to store additional log delivery configuration</p>
 * @method void setExtend(string $Extend) Set <p>Log configuration extension info, generally used to store additional log delivery configuration</p>
 * @method string getLogsetId() Obtain <p>log set id</p><ul><li>Obtain the log set Id through <a href="https://www.tencentcloud.com/document/api/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
 * @method void setLogsetId(string $LogsetId) Set <p>log set id</p><ul><li>Obtain the log set Id through <a href="https://www.tencentcloud.com/document/api/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
 * @method string getTopicId() Obtain <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
 * @method array getTags() Obtain <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the appropriate theme. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
 * @method void setTags(array $Tags) Set <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the appropriate theme. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
 */
class CreateCloudProductLogCollectionRequest extends AbstractModel
{
    /**
     * @var string <p>Instance ID</p><ul><li>Obtained through official documentation of connected cloud services</li></ul>
     */
    public $InstanceId;

    /**
     * @var string <p>Cloud product identifier. Support the following products</p><ul><li>APIS</li><li>BH</li><li>CDB</li><li>CDS</li><li>CFS</li><li>CLB</li><li>CSIP</li><li>CWP</li><li>DCDB</li><li>DNSPod</li><li>EMR</li><li>HTTPDNS</li><li>KHL</li><li>llmsgw</li><li>MariaDB</li><li>MDP</li><li>MongoDB</li><li>PostgreSQL</li><li>TCSS</li><li>TDSQL-C</li><li>TDStore</li><li>TencentDB-Redis</li><li>TEO</li><li>TokenHub</li><li>TSE</li></ul>
     */
    public $AssumerName;

    /**
     * @var string <p>Log types supported by each cloud product are as follows:</p><table><thead><tr><th>assumer_name</th><th>Supported log_type</th></tr></thead><tbody><tr><td>APIS</td><td>APIS-ACCESS</td></tr><tr><td>BH</td><td>BH-COMMANDLOG, BH-FILELOG</td></tr><tr><td>CDB</td><td>CDB-AUDIT</td></tr><tr><td>CDS</td><td>CDS-AUDIT, CDS-RISK</td></tr><tr><td>CFS</td><td>CFS-AUDIT</td></tr><tr><td>CLB</td><td>CMR-SPEND</td></tr><tr><td>CSIP</td><td>CSIP</td></tr><tr><td>CWP</td><td>CWP</td></tr><tr><td>DCDB</td><td>DCDB-AUDIT, DCDB-ERROR, DCDB-SLOW</td></tr><tr><td>DNSPod</td><td>DNSPod-RESOLVELOG</td></tr><tr><td>EMR</td><td>EMR-OPERATION</td></tr><tr><td>HTTPDNS</td><td>HTTPDNS-RESOLVELOG</td></tr><tr><td>MariaDB</td><td>MariaDB-AUDIT, MariaDB-ERROR, MariaDB-SLOW</td></tr><tr><td>MDP</td><td>MDP-SSAI</td></tr><tr><td>MongoDB</td><td>MongoDB-AUDIT, MongoDB-ErrorLog, MongoDB-OperationLog, MongoDB-SlowLog</td></tr><tr><td>PostgreSQL</td><td>PostgreSQL-AUDIT, PostgreSQL-ERROR, PostgreSQL-SLOW</td></tr><tr><td>TCSS</td><td>TCSS</td></tr><tr><td>TDSQL-C</td><td>TDSQL-C-AUDIT</td></tr><tr><td>TDStore</td><td>TDMYSQL-SLOW</td></tr><tr><td>TencentDB-Redis</td><td>Redis-AUDIT, Redis-ERROR, Redis-SLOW</td></tr><tr><td>TEO</td><td>TEO-INEFERENCE</td></tr><tr><td>llmsgw</td><td>llmsgw-mcp-security-alarm</td></tr></tbody></table>
     */
    public $LogType;

    /**
     * @var string <p>Product region. Different LogTypes have different input parameter formats:</p><p><strong>Format A: Short region code</strong> (gz / sh / bj …)</p><ul><li>All APIS log types: for example, <code>gz</code></li><li>CDB-AUDIT</li><li>TDSQL-C-AUDIT</li><li>TDMYSQL-SLOW</li><li>All DCDB log types</li><li>All MariaDB log types</li><li>All PostgreSQL log types</li><li>MongoDB-AUDIT (<strong>Note that this is different from SlowLog/ErrorLog/OperationLog</strong>)</li><li>All TencentDB-Redis log types</li><li>EMR-OPERATION</li></ul><p><strong>Format B: Long region code</strong> (ap-guangzhou / ap-shanghai / ap-singapore …)</p><ul><li>All CDS log types: for example, <code>ap-guangzhou</code></li><li>MongoDB-SlowLog / MongoDB-ErrorLog / MongoDB-OperationLog</li><li>DNSPod-RESOLVELOG</li><li>HTTPDNS-RESOLVELOG</li><li>MDP-SSAI</li><li>CFS-AUDIT</li><li>TEO-INEFERENCE</li><li>TokenHub-ActivityLog / TokenHub-AuditLog</li><li>llmsgw-mcp-security-alarm</li><li>CSIP / TCSS / TSE / CWP / KHL and others</li></ul><p><strong>Format C: Dedicated BH Polaris name</strong></p><ul><li>All BH log types: <code>overseas-polaris</code> (Hong Kong (China) and other overseas) / <code>fsi-polaris</code> (financial district) / <code>general-polaris</code> (general zone) / <code>intl-sg-prod</code> (international website)</li></ul>
     */
    public $CloudProductRegion;

    /**
     * @var string <p>CLS target region</p><ul><li>Supported regions: see <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document</li></ul>
     */
    public $ClsRegion;

    /**
     * @var string <p>Logset name. Required when LogsetId is not specified. If the log set does not exist, it will automatically create one.</p>
     */
    public $LogsetName;

    /**
     * @var string <p>Log topic name. This parameter is required when TopicId is empty. If the log topic does not exist, the system will automatically create one.</p>
     */
    public $TopicName;

    /**
     * @var string <p>Log configuration extension info, generally used to store additional log delivery configuration</p>
     */
    public $Extend;

    /**
     * @var string <p>log set id</p><ul><li>Obtain the log set Id through <a href="https://www.tencentcloud.com/document/api/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
     */
    public $LogsetId;

    /**
     * @var string <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var array <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the appropriate theme. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
     */
    public $Tags;

    /**
     * @param string $InstanceId <p>Instance ID</p><ul><li>Obtained through official documentation of connected cloud services</li></ul>
     * @param string $AssumerName <p>Cloud product identifier. Support the following products</p><ul><li>APIS</li><li>BH</li><li>CDB</li><li>CDS</li><li>CFS</li><li>CLB</li><li>CSIP</li><li>CWP</li><li>DCDB</li><li>DNSPod</li><li>EMR</li><li>HTTPDNS</li><li>KHL</li><li>llmsgw</li><li>MariaDB</li><li>MDP</li><li>MongoDB</li><li>PostgreSQL</li><li>TCSS</li><li>TDSQL-C</li><li>TDStore</li><li>TencentDB-Redis</li><li>TEO</li><li>TokenHub</li><li>TSE</li></ul>
     * @param string $LogType <p>Log types supported by each cloud product are as follows:</p><table><thead><tr><th>assumer_name</th><th>Supported log_type</th></tr></thead><tbody><tr><td>APIS</td><td>APIS-ACCESS</td></tr><tr><td>BH</td><td>BH-COMMANDLOG, BH-FILELOG</td></tr><tr><td>CDB</td><td>CDB-AUDIT</td></tr><tr><td>CDS</td><td>CDS-AUDIT, CDS-RISK</td></tr><tr><td>CFS</td><td>CFS-AUDIT</td></tr><tr><td>CLB</td><td>CMR-SPEND</td></tr><tr><td>CSIP</td><td>CSIP</td></tr><tr><td>CWP</td><td>CWP</td></tr><tr><td>DCDB</td><td>DCDB-AUDIT, DCDB-ERROR, DCDB-SLOW</td></tr><tr><td>DNSPod</td><td>DNSPod-RESOLVELOG</td></tr><tr><td>EMR</td><td>EMR-OPERATION</td></tr><tr><td>HTTPDNS</td><td>HTTPDNS-RESOLVELOG</td></tr><tr><td>MariaDB</td><td>MariaDB-AUDIT, MariaDB-ERROR, MariaDB-SLOW</td></tr><tr><td>MDP</td><td>MDP-SSAI</td></tr><tr><td>MongoDB</td><td>MongoDB-AUDIT, MongoDB-ErrorLog, MongoDB-OperationLog, MongoDB-SlowLog</td></tr><tr><td>PostgreSQL</td><td>PostgreSQL-AUDIT, PostgreSQL-ERROR, PostgreSQL-SLOW</td></tr><tr><td>TCSS</td><td>TCSS</td></tr><tr><td>TDSQL-C</td><td>TDSQL-C-AUDIT</td></tr><tr><td>TDStore</td><td>TDMYSQL-SLOW</td></tr><tr><td>TencentDB-Redis</td><td>Redis-AUDIT, Redis-ERROR, Redis-SLOW</td></tr><tr><td>TEO</td><td>TEO-INEFERENCE</td></tr><tr><td>llmsgw</td><td>llmsgw-mcp-security-alarm</td></tr></tbody></table>
     * @param string $CloudProductRegion <p>Product region. Different LogTypes have different input parameter formats:</p><p><strong>Format A: Short region code</strong> (gz / sh / bj …)</p><ul><li>All APIS log types: for example, <code>gz</code></li><li>CDB-AUDIT</li><li>TDSQL-C-AUDIT</li><li>TDMYSQL-SLOW</li><li>All DCDB log types</li><li>All MariaDB log types</li><li>All PostgreSQL log types</li><li>MongoDB-AUDIT (<strong>Note that this is different from SlowLog/ErrorLog/OperationLog</strong>)</li><li>All TencentDB-Redis log types</li><li>EMR-OPERATION</li></ul><p><strong>Format B: Long region code</strong> (ap-guangzhou / ap-shanghai / ap-singapore …)</p><ul><li>All CDS log types: for example, <code>ap-guangzhou</code></li><li>MongoDB-SlowLog / MongoDB-ErrorLog / MongoDB-OperationLog</li><li>DNSPod-RESOLVELOG</li><li>HTTPDNS-RESOLVELOG</li><li>MDP-SSAI</li><li>CFS-AUDIT</li><li>TEO-INEFERENCE</li><li>TokenHub-ActivityLog / TokenHub-AuditLog</li><li>llmsgw-mcp-security-alarm</li><li>CSIP / TCSS / TSE / CWP / KHL and others</li></ul><p><strong>Format C: Dedicated BH Polaris name</strong></p><ul><li>All BH log types: <code>overseas-polaris</code> (Hong Kong (China) and other overseas) / <code>fsi-polaris</code> (financial district) / <code>general-polaris</code> (general zone) / <code>intl-sg-prod</code> (international website)</li></ul>
     * @param string $ClsRegion <p>CLS target region</p><ul><li>Supported regions: see <a href="https://www.tencentcloud.com/document/api/614/56474?from_cn_redirect=1#.E5.9C.B0.E5.9F.9F.E5.88.97.E8.A1.A8">region list</a> document</li></ul>
     * @param string $LogsetName <p>Logset name. Required when LogsetId is not specified. If the log set does not exist, it will automatically create one.</p>
     * @param string $TopicName <p>Log topic name. This parameter is required when TopicId is empty. If the log topic does not exist, the system will automatically create one.</p>
     * @param string $Extend <p>Log configuration extension info, generally used to store additional log delivery configuration</p>
     * @param string $LogsetId <p>log set id</p><ul><li>Obtain the log set Id through <a href="https://www.tencentcloud.com/document/api/614/58624?from_cn_redirect=1">Get Logset List</a>.</li></ul>
     * @param string $TopicId <p>log topic id</p><ul><li>Obtain the log topic Id through <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">Get Log Topic List</a>.</li></ul>
     * @param array $Tags <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the appropriate theme. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AssumerName",$param) and $param["AssumerName"] !== null) {
            $this->AssumerName = $param["AssumerName"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("CloudProductRegion",$param) and $param["CloudProductRegion"] !== null) {
            $this->CloudProductRegion = $param["CloudProductRegion"];
        }

        if (array_key_exists("ClsRegion",$param) and $param["ClsRegion"] !== null) {
            $this->ClsRegion = $param["ClsRegion"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Extend",$param) and $param["Extend"] !== null) {
            $this->Extend = $param["Extend"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
