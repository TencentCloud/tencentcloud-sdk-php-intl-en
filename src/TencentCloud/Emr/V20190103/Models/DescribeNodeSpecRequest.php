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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodeSpec request structure.
 *
 * @method integer getZoneId() Obtain Availability zone (AZ) ID. https://document.capi.woa.com/document/api/1605/76892 can be accessed for related information.
 * @method void setZoneId(integer $ZoneId) Set Availability zone (AZ) ID. https://document.capi.woa.com/document/api/1605/76892 can be accessed for related information.
 * @method integer getCvmPayMode() Obtain 0: pay-as-you-go; 1: yearly/monthly subscription; 99: a combination of pay-as-you-go and yearly/monthly subscription. Invalid values will suppress billing display.
 * @method void setCvmPayMode(integer $CvmPayMode) Set 0: pay-as-you-go; 1: yearly/monthly subscription; 99: a combination of pay-as-you-go and yearly/monthly subscription. Invalid values will suppress billing display.
 * @method string getNodeType() Obtain Node type: Master,Core,Task,Router,All.
 * @method void setNodeType(string $NodeType) Set Node type: Master,Core,Task,Router,All.
 * @method integer getTradeType() Obtain 0: old billing page; 1: new billing page. Invalid values will be deemed to be old billing by default.
 * @method void setTradeType(integer $TradeType) Set 0: old billing page; 1: new billing page. Invalid values will be deemed to be old billing by default.
 * @method integer getProductId() Obtain Product ID. If left blank, the value is "0". This field is used to represent the product ID in all situations. It is required in front-end scenarios.

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
 * @method void setProductId(integer $ProductId) Set Product ID. If left blank, the value is "0". This field is used to represent the product ID in all situations. It is required in front-end scenarios.

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
 * @method string getSceneName() Obtain Scenario name.
 * @method void setSceneName(string $SceneName) Set Scenario name.
 * @method string getResourceBaseType() Obtain The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method void setResourceBaseType(string $ResourceBaseType) Set The type can be ComputeResource, EMR, or a default value. The default value is EMR.
 * @method string getComputeResourceId() Obtain Computing resource ID.
 * @method void setComputeResourceId(string $ComputeResourceId) Set Computing resource ID.
 */
class DescribeNodeSpecRequest extends AbstractModel
{
    /**
     * @var integer Availability zone (AZ) ID. https://document.capi.woa.com/document/api/1605/76892 can be accessed for related information.
     */
    public $ZoneId;

    /**
     * @var integer 0: pay-as-you-go; 1: yearly/monthly subscription; 99: a combination of pay-as-you-go and yearly/monthly subscription. Invalid values will suppress billing display.
     */
    public $CvmPayMode;

    /**
     * @var string Node type: Master,Core,Task,Router,All.
     */
    public $NodeType;

    /**
     * @var integer 0: old billing page; 1: new billing page. Invalid values will be deemed to be old billing by default.
     */
    public $TradeType;

    /**
     * @var integer Product ID. If left blank, the value is "0". This field is used to represent the product ID in all situations. It is required in front-end scenarios.

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
     */
    public $ProductId;

    /**
     * @var string Scenario name.
     */
    public $SceneName;

    /**
     * @var string The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     */
    public $ResourceBaseType;

    /**
     * @var string Computing resource ID.
     */
    public $ComputeResourceId;

    /**
     * @param integer $ZoneId Availability zone (AZ) ID. https://document.capi.woa.com/document/api/1605/76892 can be accessed for related information.
     * @param integer $CvmPayMode 0: pay-as-you-go; 1: yearly/monthly subscription; 99: a combination of pay-as-you-go and yearly/monthly subscription. Invalid values will suppress billing display.
     * @param string $NodeType Node type: Master,Core,Task,Router,All.
     * @param integer $TradeType 0: old billing page; 1: new billing page. Invalid values will be deemed to be old billing by default.
     * @param integer $ProductId Product ID. If left blank, the value is "0". This field is used to represent the product ID in all situations. It is required in front-end scenarios.

44	EMR	V3.5.0
43	EMR	V3.4.0.tlinux
42	EMR	V2.7.0.tlinux
41	DRUID	V1.1.0
67	STARROCKS	V2.2.0
45	DRUID	V1.1.0.tlinux
40	EMRCLOUD	v3.2.0
47	EMR	V4.0.0
48	STARROCKS	V1.2.0
49	STARROCKS	V1.3.0
50	KAFKA	V2.0.0
51	STARROCKS	V1.4.0
52	EMR-TKE	V1.0.0
53	EMR	V3.6.0
54	STARROCKS	V2.0.0
55	EMR-TKE	V1.0.1
56	EMR-TKE	DLCV1.0.0
57	EMR	V2.8.0
58	EMR	V3.6.1
59	SERVERLESS	V1.0.0
60	EMR-TKE	V1.1.0
62	STARROCKS	V2.1.1
63	STARROCKS	V2.1.1.tlinux
64	EMR-TKE	TCCV1.0.0
65	EMR-TKE-AI	V1.0.0
66	RSS	V1.0.0
24	EMR	TianQiong-V1.0.0
3	EMR	V2.0.1.tlinux
4	EMR	V2.1.0
7	EMR	V3.0.0
8	EMR	V3.0.0.tlinux
9	EMR	V2.2.0
11	CLICKHOUSE	V1.0.0
12	CLICKHOUSE	V1.0.0.tlinux
16	EMR	V2.3.0
17	CLICKHOUSE	V1.1.0
18	CLICKHOUSE	V1.1.0.tlinux
19	EMR	V2.4.0
20	EMR	V2.5.0
21	USERCUSTOM	V1.0.0
22	CLICKHOUSE	V1.2.0
39	STARROCKS	V1.1.0
25	EMR	V3.1.0
26	DORIS	V1.0.0
27	KAFKA	V1.0.0
28	EMR	V3.2.0
29	EMR	V2.5.1
30	EMR	V2.6.0
32	DORIS	V1.1.0
33	EMR	V3.2.1
34	EMR	V3.3.0
35	DORIS	V1.2.0
36	STARROCKS	V1.0.0
37	EMR	V3.4.0
38	EMR	V2.7.0
     * @param string $SceneName Scenario name.
     * @param string $ResourceBaseType The type can be ComputeResource, EMR, or a default value. The default value is EMR.
     * @param string $ComputeResourceId Computing resource ID.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("CvmPayMode",$param) and $param["CvmPayMode"] !== null) {
            $this->CvmPayMode = $param["CvmPayMode"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
